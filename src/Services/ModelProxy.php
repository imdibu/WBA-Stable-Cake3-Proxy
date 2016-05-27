<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 26.05.2016
 * Time: 15:36
 */

namespace App\Services;

use Cake\ORM\TableRegistry;

class ModelProxy
{
    protected $model;
    protected $modelTable;
    protected $data;
    protected $multiple;
    protected $errors = [];

    public static function saveData($primaryModel, $data, $multiple = false)
    {
        $entity = new static($primaryModel, $data, $multiple);
        return $entity->insert();
    }

    private function __construct($primaryModel, $data, $multiple = false)
    {
        if (static::tableExists(TableRegistry::get($primaryModel)->table())) {
            $this->model = $primaryModel;
            $this->modelTable = TableRegistry::get($primaryModel);
            $this->data = $data;
            $this->multiple = $multiple;
        }
    }

    public function insert()
    {
        if (isset($this->data[$this->model])) {
            if ($this->multiple) {
                foreach ($this->data[$this->model] as $rowNum => $data) {
                    $this->insertModel($data);
                }
            } else {
                $this->insertModel($this->data[$this->model]);
            }
        }
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function getErrors()
    {
        return $this->errors;
    }

    protected function insertModel($data)
    {
        $model = $this->modelTable->newEntity();
        $this->assign($model, $data);
        $errors = [];
        if ($this->modelTable->save($model)) {
            $errors = array_merge($errors, $model->errors());
        }
        $this->errors = $errors;
        return empty($errors);
    }

    protected function assign(&$entity, $data = [])
    {
        foreach ($data as $property => $value) {
            $entity->{$property} = $value;
        }
    }

    protected static function tableExists($tableName)
    {
        return strpos($tableName, 'coats_') === 0;
    }
}