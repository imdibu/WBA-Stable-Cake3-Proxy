<?php
namespace App\Model\Table\Base;

use App\Model\Entity\FceTask;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FceTasks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $OrderLines
 * @property \Cake\ORM\Association\BelongsTo $ShipToParties
 * @property \Cake\ORM\Association\BelongsTo $Requesters
 * @property \Cake\ORM\Association\BelongsTo $TaskModes
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class FceTasksTable extends CoatsTable
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

        $this->table('coats_fce_tasks');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OrderLines', [
            'foreignKey' => 'order_line_id'
        ]);
        $this->belongsTo('ShipToParties', [
            'foreignKey' => 'ship_to_party_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Requesters', [
            'foreignKey' => 'requester_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TaskModes', [
            'foreignKey' => 'task_mode_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UpdatedUsers', [
            'foreignKey' => 'updated_user_id',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('appointment_date')
            ->allowEmpty('appointment_date');

        $validator
            ->integer('is_completed')
            ->requirePresence('is_completed', 'create')
            ->notEmpty('is_completed');

        $validator
            ->dateTime('completed')
            ->allowEmpty('completed');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['order_line_id'], 'OrderLines'));
        $rules->add($rules->existsIn(['ship_to_party_id'], 'ShipToParties'));
        $rules->add($rules->existsIn(['requester_id'], 'Requesters'));
        $rules->add($rules->existsIn(['task_mode_id'], 'TaskModes'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
