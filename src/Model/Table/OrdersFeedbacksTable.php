<?php
namespace App\Model\Table\Base;

use App\Model\Entity\OrdersFeedback;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdersFeedbacks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $LineItems
 * @property \Cake\ORM\Association\BelongsTo $RaisedBies
 * @property \Cake\ORM\Association\BelongsTo $Rejections
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class OrdersFeedbacksTable extends CoatsTable
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

        $this->table('coats_orders_feedbacks');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LineItems', [
            'foreignKey' => 'line_item_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RaisedBies', [
            'foreignKey' => 'raised_by_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Rejections', [
            'foreignKey' => 'rejection_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('is_happy')
            ->requirePresence('is_happy', 'create')
            ->notEmpty('is_happy');

        $validator
            ->integer('rematch')
            ->allowEmpty('rematch');

        $validator
            ->allowEmpty('rejection_reason_others');

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
        $rules->add($rules->existsIn(['line_item_id'], 'LineItems'));
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['raised_by_id'], 'RaisedBies'));
        $rules->add($rules->existsIn(['rejection_id'], 'Rejections'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
