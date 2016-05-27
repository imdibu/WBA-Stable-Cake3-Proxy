<?php
namespace App\Model\Table\Base;

use App\Model\Entity\LrmLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LrmLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $OrderLines
 * @property \Cake\ORM\Association\BelongsTo $DeliveryPlants
 * @property \Cake\ORM\Association\BelongsTo $SupplyPlants
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class LrmLogsTable extends CoatsTable
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

        $this->table('coats_lrm_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('OrderLines', [
            'foreignKey' => 'order_line_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DeliveryPlants', [
            'foreignKey' => 'delivery_plant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SupplyPlants', [
            'foreignKey' => 'supply_plant_id',
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
            ->requirePresence('order_no', 'create')
            ->notEmpty('order_no');

        $validator
            ->requirePresence('line_no', 'create')
            ->notEmpty('line_no');

        $validator
            ->allowEmpty('shade_name');

        $validator
            ->allowEmpty('shade_code');

        $validator
            ->allowEmpty('standard_type');

        $validator
            ->allowEmpty('type_code');

        $validator
            ->requirePresence('transaction_type', 'create')
            ->notEmpty('transaction_type');

        $validator
            ->requirePresence('request_content', 'create')
            ->notEmpty('request_content');

        $validator
            ->integer('is_success')
            ->requirePresence('is_success', 'create')
            ->notEmpty('is_success');

        $validator
            ->requirePresence('response_text', 'create')
            ->notEmpty('response_text');

        $validator
            ->requirePresence('response_content', 'create')
            ->notEmpty('response_content');

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
        $rules->add($rules->existsIn(['delivery_plant_id'], 'DeliveryPlants'));
        $rules->add($rules->existsIn(['supply_plant_id'], 'SupplyPlants'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
