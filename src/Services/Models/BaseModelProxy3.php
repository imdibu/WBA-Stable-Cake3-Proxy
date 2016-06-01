<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 30.05.2016
 * Time: 10:56
 */

namespace App\Services\Models;


use Cake\Datasource\Exception\MissingModelException;
use Cake\ORM\TableRegistry;

abstract class BaseModelProxy3
{
    const CLASS_SUFFIX = 'Proxy3';

    protected $foreign_key_alias;  
    protected $model;
    protected $modelTable;
    protected $data;
    protected $multiple;
    protected $errors = [];

    public function __construct()
    {
        if (!static::tableExists(TableRegistry::get($this->model)->table())) {
            throw new MissingModelException(sprintf('%s model does not have a valid table in the database!', $this->model));
        }

        $this->modelTable = TableRegistry::get($this->model);
    }

    public static function className($stubOnly = false)
    {
        return $stubOnly ? end(explode("\\", get_called_class())) : get_called_class();
    }

    public static function getClassNs($className)
    {
        return str_replace(static::className(true), $className, static::className());
    }

    public static function classExists($className)
    {
        return class_exists(static::getClassNs($className) . static::CLASS_SUFFIX);
    }

    public static function tableExists($tableName)
    {
        return strpos($tableName, 'coats_') === 0;
    }

    public function insertData($data)
    {
        $model = $this->modelTable->newEntity();
        $this->assign($model, $data);
        $errors = [];
        if (!$this->modelTable->save($model)) {
            $errors = array_merge($errors, $model->errors());
        }
        if (empty($errors)) {
            return $model->id;
        }

        $this->errors = $errors;
        return false;
    }

    public function create($model, $fields, $values)
    {
        $entity = $this->modelTable->newEntity(array_combine($fields, $values));
        if (!$this->modelTable->save($entity)) {
            return false;
        }
        $model->setInsertID($entity->id);
        $model->id = $entity->id;
        return true;
    }

    public function update($model, $fields, $values)
    {
        $data = array_combine($fields, $values);
        if (isset($data[$model->primaryKey])) {
            unset($data[$model->primaryKey]);
        }
        if (empty($fields)) {
            return true;
        }

        $entity = $this->modelTable->get($model->id);
        $this->assign($entity, $data);

        return (bool) $this->modelTable->save($entity);
    }

    public function save(array $data = [], $options = [])
    {
        if (($model_id = $this->insertData($data[$this->model])) !== false) {
            unset($data[$this->model]);
            $this->saveRelations($model_id, $data);
        }
    }

    public function saveRelation($modelAlias, $foreign_key_id, $data, $options)
    {
        $isSingleInsert = array_reduce(array_keys($data), function ($carry, $item) {
            return $carry && !is_numeric($item);
        }, true);

        if (($model = static::loadModel($modelAlias)) !== false) {
            if ($isSingleInsert) {
                $data[$this->foreign_key_alias] = $foreign_key_id;
                $model->save([$modelAlias => $data]);
            } else {
                foreach ($data as $key => $d) {
                    $d[$this->foreign_key_alias] = $foreign_key_id;
                    $model->save([$modelAlias => $d]);
                }
            }
        }
    }

    public function saveRelations($foreign_key_id, $data, $options = [])
    {
        if (empty($this->foreign_key_alias)) {
            return;
        }

        foreach ($data as $modelAlias => &$d) {
            $this->saveRelation($modelAlias, $foreign_key_id, $d, $options);
        }
    }

    public static function loadModel($className)
    {
        if (static::classExists($className)) {
            $modelClass = static::getClassNs($className) . static::CLASS_SUFFIX;
            return new $modelClass();
        }
        return false;
    }

    protected function assign(&$entity, $data = [])
    {
        foreach ($data as $property => $value) {
            $entity->{$property} = $value;
        }
    }

    protected function dataIsWrapped($data)
    {
        return array_key_exists($this->model, $data) && !empty($data[$this->model]);
    }
}