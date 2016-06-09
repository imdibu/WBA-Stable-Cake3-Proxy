<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 12.05.2016
 * Time: 11:24
 */

namespace App\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Table;

class CoatsTable extends Table
{
    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->connection()->begin();
    }

    public function afterSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->connection()->commit();
    }
}