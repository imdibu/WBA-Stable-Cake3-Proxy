<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 12.05.2016
 * Time: 11:24
 */

namespace App\Model\Table;

//use App\Extension\Query;
//use App\Utils\SessionUtils;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class CoatsTable extends Table
{
//    private $_queryType = 'all';
//
//    /**
//     * replacement for field method just like Cake 2 provided
//     *
//     * @param $fieldName
//     * @param $options
//     * @return null
//     */
//    public function field($fieldName, $options = [])
//    {
//        if ($entity = $this->find('all', $options)->select([$fieldName])->first()) {
//            return $entity->{$fieldName};
//        }
//
//        return null;
//    }
//
//    public function first($select = [], $conditions = [], $options = [])
//    {
//        return $this->find('all', $options)->select($select)->where($conditions)->first();
//    }
//
//    public function find($type = 'all', $options = [])
//    {
//        $this->_queryType = $type;
//        return parent::find($type, $options);
//    }
//
//    public function initQuery($options)
//    {
//        $query = $this->query();
//        $query->select();
//        $query->applyOptions($options);
//
//        return $query;
//    }
//
//    public function beforeMarshal(Event $event, \ArrayObject $data, \ArrayObject $options)
//    {
//        $user_id = SessionUtils::read('User.id');
//
//        $schema = $this->schema()->columns();
//
//        if (in_array('created_user_id', $schema)) {
//            $data->offsetSet('created_user_id', $user_id);
//        };
//
//        if (in_array('updated_user_id', $schema)) {
//            $data->offsetSet('updated_user_id', (isset($user_id) ? $user_id : 1));
//        }
//    }
//
//    public function getField($alias, $field, $conditions)
//    {
//        if ($table = TableRegistry::get($alias)) {
//            $query = $table->find()->where($conditions);
//            if (($result = $query->first()) !== null) {
//                return $result->{$field};
//            }
//        }
//
//        return null;
//    }
//
//    /**
//     * {@inheritDoc}
//     */
//    public function query()
//    {
//        return new Query($this->connection(), $this);
//    }
//
//    public function getQueryType()
//    {
//        return $this->_queryType;
//    }
//
    
}