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

    protected $model;
    protected $modelTable;

    /**
     * check if the table has been created
     *
     * BaseModelProxy3 constructor.
     * @throws MissingModelException if the table model does not exist
     */
    public function __construct()
    {
        if (!static::tableExists(TableRegistry::get($this->model)->table())) {
            throw new MissingModelException(sprintf('%s model does not have a valid table in the database!', $this->model));
        }

        $this->modelTable = TableRegistry::get($this->model);
    }

    /**
     * get the clas
     *
     * @param bool $stubOnly
     * @return mixed
     */
    public static function className($stubOnly = false)
    {
        return $stubOnly ? end(explode("\\", get_called_class())) : get_called_class();
    }

    /**
     * return the fully qualified namespace
     *
     * @param $className
     * @return mixed
     */
    public static function getClassNs($className)
    {
        return str_replace(static::className(true), $className, static::className());
    }

    /**
     * check if the proxy class exists
     *
     * @param $className
     * @return mixed
     */
    public static function classExists($className)
    {
        return class_exists(static::getClassNs($className) . static::CLASS_SUFFIX);
    }

    /**
     * check if the cake 3 table is mapped on a database table
     *
     * @param $tableName
     * @return bool
     */
    public static function tableExists($tableName)
    {
        return strpos($tableName, 'coats_') === 0;
    }

    /**
     * replace boolean values with 1 or 0 to prevent inserting nulls on non null columns
     *
     * @param $fields
     * @param $values
     * @return mixed
     */
    protected function combine($fields, $values)
    {
        $result = array_combine($fields, $values);
        foreach ($result as &$item) {
            if (is_bool($item)) {
                $item = (int) $item;
            }
        }

        return $result;
    }

    /**
     * create a new entity, populate the fields and attempt record insert
     * if the save is successful set the cake 2 model id for further usage
     *
     * @param $model - cake 2 model
     * @param $fields - field names
     * @param $values - field values
     * @return bool
     */
    public function create($model, $fields, $values)
    {
        $entity = $this->modelTable->newEntity($this->combine($fields, $values));
        if (!$this->modelTable->save($entity)) {
            return false;
        }
        $model->setInsertID($entity->id);
        $model->id = $entity->id;
        return true;
    }

    /**
     * attempt the update of an existing record
     * lose the primary key
     * assign each field in the entity with it's value
     *
     * @param $model - cake 2 model
     * @param $fields - field names
     * @param $values - field values
     * @return bool
     */
    public function update($model, $fields, $values)
    {
        $data = $this->combine($fields, $values);
        if (isset($data[$model->primaryKey])) {
            unset($data[$model->primaryKey]);
        }
        if (empty($fields)) {
            return true;
        }

        $entity = $this->modelTable->get($model->id);
        $this->assign($entity, $data);

        return (bool) $this->modelTable->save($entity, array(
            'atomic' => false,
            'associated' => false
        ));
    }

    /**
     * return an instance of a proxy model
     *
     * @param $className
     * @return bool
     */
    public static function loadModel($className)
    {
        if (static::classExists($className)) {
            $modelClass = static::getClassNs($className) . static::CLASS_SUFFIX;
            return new $modelClass();
        }
        return false;
    }

    /**
     * assign values to the entity's members
     *
     * @param $entity
     * @param array $data
     */
    protected function assign(&$entity, $data = [])
    {
        foreach ($data as $property => $value) {
            $entity->{$property} = $value;
        }
    }
}