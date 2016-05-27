<?php
namespace App\Model\Table\Base;

use App\Model\Entity\DateFormat;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DateFormats Model
 *
 */
class DateFormatsTable extends CoatsTable
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('coats_date_formats');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('date_format', 'create')
            ->notEmpty('date_format');

        $validator
            ->requirePresence('php', 'create')
            ->notEmpty('php');

        $validator
            ->requirePresence('mysql', 'create')
            ->notEmpty('mysql');

        $validator
            ->requirePresence('picker', 'create')
            ->notEmpty('picker');

        return $validator;
    }
}
