<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SampleOrderData;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleOrderData Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $CceSolutions
 * @property \Cake\ORM\Association\BelongsTo $Priorities
 */
class SampleOrderDataTable extends CoatsTable
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

        $this->table('coats_sample_order_data');
        $this->displayField('order_id');
        $this->primaryKey('order_id');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CceSolutions', [
            'foreignKey' => 'cce_solution_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Priorities', [
            'foreignKey' => 'priority_id',
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
            ->requirePresence('customer_name', 'create')
            ->notEmpty('customer_name');

        $validator
            ->requirePresence('customer_code', 'create')
            ->notEmpty('customer_code');

        $validator
            ->requirePresence('ship_to_party_name', 'create')
            ->notEmpty('ship_to_party_name');

        $validator
            ->requirePresence('ship_to_party_no', 'create')
            ->notEmpty('ship_to_party_no');

        $validator
            ->requirePresence('ship_to_party_address_line1', 'create')
            ->notEmpty('ship_to_party_address_line1');

        $validator
            ->allowEmpty('ship_to_party_address_line2');

        $validator
            ->requirePresence('ship_to_party_street', 'create')
            ->notEmpty('ship_to_party_street');

        $validator
            ->allowEmpty('ship_to_party_city');

        $validator
            ->requirePresence('ship_to_party_state', 'create')
            ->notEmpty('ship_to_party_state');

        $validator
            ->requirePresence('ship_to_party_zip_code', 'create')
            ->notEmpty('ship_to_party_zip_code');

        $validator
            ->allowEmpty('requester_first_name');

        $validator
            ->allowEmpty('requester_last_name');

        $validator
            ->requirePresence('requester_email', 'create')
            ->notEmpty('requester_email');

        $validator
            ->allowEmpty('requester_mobile');

        $validator
            ->requirePresence('business_principal_name', 'create')
            ->notEmpty('business_principal_name');

        $validator
            ->requirePresence('business_principal_no', 'create')
            ->notEmpty('business_principal_no');

        $validator
            ->requirePresence('ls_primary', 'create')
            ->notEmpty('ls_primary');

        $validator
            ->allowEmpty('ls_secondary');

        $validator
            ->allowEmpty('ls_third');

        $validator
            ->allowEmpty('creator_first_name');

        $validator
            ->allowEmpty('creator_last_name');

        $validator
            ->requirePresence('creator_email', 'create')
            ->notEmpty('creator_email');

        $validator
            ->allowEmpty('creator_mobile');

        $validator
            ->requirePresence('hub_name', 'create')
            ->notEmpty('hub_name');

        $validator
            ->requirePresence('country_name', 'create')
            ->notEmpty('country_name');

        $validator
            ->requirePresence('sales_org_name', 'create')
            ->notEmpty('sales_org_name');

        $validator
            ->allowEmpty('fce_first_name');

        $validator
            ->allowEmpty('fce_last_name');

        $validator
            ->allowEmpty('fce_email');

        $validator
            ->allowEmpty('fce_mobile');

        $validator
            ->allowEmpty('buying_house_name');

        $validator
            ->allowEmpty('buying_house_no');

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
        $rules->add($rules->existsIn(['cce_solution_id'], 'CceSolutions'));
        $rules->add($rules->existsIn(['priority_id'], 'Priorities'));
        return $rules;
    }
}
