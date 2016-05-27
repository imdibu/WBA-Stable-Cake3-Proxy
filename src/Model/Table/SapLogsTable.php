<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SapLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SapLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $OrderLines
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class SapLogsTable extends CoatsTable
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

        $this->table('coats_sap_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrderLines', [
            'foreignKey' => 'order_line_id',
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('order_no', 'create')
            ->notEmpty('order_no');

        $validator
            ->requirePresence('line_no', 'create')
            ->notEmpty('line_no');

        $validator
            ->requirePresence('source', 'create')
            ->notEmpty('source');

        $validator
            ->requirePresence('scenario', 'create')
            ->notEmpty('scenario');

        $validator
            ->requirePresence('transaction_type', 'create')
            ->notEmpty('transaction_type');

        $validator
            ->integer('is_below_threshold')
            ->requirePresence('is_below_threshold', 'create')
            ->notEmpty('is_below_threshold');

        $validator
            ->integer('is_charged')
            ->requirePresence('is_charged', 'create')
            ->notEmpty('is_charged');

        $validator
            ->integer('is_forced_enrichment')
            ->requirePresence('is_forced_enrichment', 'create')
            ->notEmpty('is_forced_enrichment');

        $validator
            ->requirePresence('request_content', 'create')
            ->notEmpty('request_content');

        $validator
            ->requirePresence('response_code', 'create')
            ->notEmpty('response_code');

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
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['order_line_id'], 'OrderLines'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
