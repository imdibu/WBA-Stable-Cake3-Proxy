<?php
namespace App\Model\Table\Base;

use App\Model\Entity\OrderStage;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderStages Model
 *
 */
class OrderStagesTable extends CoatsTable
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

        $this->table('coats_order_stages');
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
            ->requirePresence('stage', 'create')
            ->notEmpty('stage');

        $validator
            ->allowEmpty('taskPendingReport');

        $validator
            ->boolean('access_to_task_report')
            ->allowEmpty('access_to_task_report');

        $validator
            ->boolean('access_to_lab')
            ->allowEmpty('access_to_lab');

        return $validator;
    }
}
