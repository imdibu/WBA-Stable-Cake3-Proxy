<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SalesOrg;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesOrgs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 * @property \Cake\ORM\Association\BelongsTo $Ccefreetypes
 * @property \Cake\ORM\Association\BelongsTo $Ccechargedtypes
 * @property \Cake\ORM\Association\BelongsTo $Ecomtypes
 * @property \Cake\ORM\Association\BelongsTo $DefaultLanguages
 * @property \Cake\ORM\Association\BelongsTo $DefaultRegions
 * @property \Cake\ORM\Association\BelongsTo $LiveLinkServices
 * @property \Cake\ORM\Association\BelongsTo $PopUps
 * @property \Cake\ORM\Association\BelongsTo $Timezones
 * @property \Cake\ORM\Association\BelongsTo $ShippingConditions
 */
class SalesOrgsTable extends CoatsTable
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

        $this->table('coats_sales_orgs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
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
        $this->belongsTo('Ccefreetypes', [
            'foreignKey' => 'ccefreetypes_id'
        ]);
        $this->belongsTo('Ccechargedtypes', [
            'foreignKey' => 'ccechargedtypes_id'
        ]);
        $this->belongsTo('Ecomtypes', [
            'foreignKey' => 'ecomtypes_id'
        ]);
        $this->belongsTo('DefaultLanguages', [
            'foreignKey' => 'default_language_id'
        ]);
        $this->belongsTo('DefaultRegions', [
            'foreignKey' => 'default_region_id'
        ]);
        $this->belongsTo('LiveLinkServices', [
            'foreignKey' => 'live_link_service_id'
        ]);
        $this->belongsTo('PopUps', [
            'foreignKey' => 'pop_up_id'
        ]);
        $this->belongsTo('Timezones', [
            'foreignKey' => 'timezone_id'
        ]);
        $this->belongsTo('ShippingConditions', [
            'foreignKey' => 'shipping_condition_id'
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
            ->requirePresence('sales_org_name', 'create')
            ->notEmpty('sales_org_name')
            ->add('sales_org_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('is_sap_instance_enabled')
            ->requirePresence('is_sap_instance_enabled', 'create')
            ->notEmpty('is_sap_instance_enabled');

        $validator
            ->allowEmpty('sap_instance');

        $validator
            ->integer('is_charged')
            ->requirePresence('is_charged', 'create')
            ->notEmpty('is_charged');

        $validator
            ->integer('is_forced_enrichment')
            ->requirePresence('is_forced_enrichment', 'create')
            ->notEmpty('is_forced_enrichment');

        $validator
            ->integer('exclude_from_dye_lot')
            ->allowEmpty('exclude_from_dye_lot');

        $validator
            ->requirePresence('product_availability_check', 'create')
            ->notEmpty('product_availability_check');

        $validator
            ->allowEmpty('force_re_agree');

        $validator
            ->requirePresence('privacy_policy_content', 'create')
            ->notEmpty('privacy_policy_content');

        $validator
            ->requirePresence('enabled_tnc', 'create')
            ->notEmpty('enabled_tnc');

        $validator
            ->integer('allow_to_print_dn_invoice')
            ->requirePresence('allow_to_print_dn_invoice', 'create')
            ->notEmpty('allow_to_print_dn_invoice');

        $validator
            ->requirePresence('coats_user_emails', 'create')
            ->notEmpty('coats_user_emails');

        $validator
            ->integer('add_line_info_line')
            ->requirePresence('add_line_info_line', 'create')
            ->notEmpty('add_line_info_line');

        $validator
            ->integer('division')
            ->requirePresence('division', 'create')
            ->notEmpty('division');

        $validator
            ->requirePresence('distribution', 'create')
            ->notEmpty('distribution');

        $validator
            ->allowEmpty('address_line1');

        $validator
            ->allowEmpty('address_line2');

        $validator
            ->allowEmpty('street');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('state');

        $validator
            ->allowEmpty('zip_code');

        $validator
            ->allowEmpty('company_name');

        $validator
            ->requirePresence('enabled_poprint', 'create')
            ->notEmpty('enabled_poprint');

        $validator
            ->integer('sales_approval_workflow')
            ->requirePresence('sales_approval_workflow', 'create')
            ->notEmpty('sales_approval_workflow');

        $validator
            ->integer('enabled_runningtext')
            ->allowEmpty('enabled_runningtext');

        $validator
            ->integer('is_payer_enabled')
            ->allowEmpty('is_payer_enabled');

        $validator
            ->integer('is_cceshipnotice_enabled')
            ->allowEmpty('is_cceshipnotice_enabled');

        $validator
            ->integer('enable_live_link')
            ->allowEmpty('enable_live_link');

        $validator
            ->integer('enabled_orders_without_shade')
            ->requirePresence('enabled_orders_without_shade', 'create')
            ->notEmpty('enabled_orders_without_shade');

        $validator
            ->integer('enable_customer_price')
            ->allowEmpty('enable_customer_price');

        $validator
            ->integer('off_order')
            ->allowEmpty('off_order');

        $validator
            ->integer('combined_order')
            ->allowEmpty('combined_order');

        $validator
            ->integer('cce_priority')
            ->allowEmpty('cce_priority');

        $validator
            ->integer('enable_buying_house')
            ->allowEmpty('enable_buying_house');

        $validator
            ->integer('enable_required_date_logic')
            ->allowEmpty('enable_required_date_logic');

        $validator
            ->allowEmpty('close_time');

        $validator
            ->integer('partial_stock_check')
            ->allowEmpty('partial_stock_check');

        $validator
            ->integer('forward_order_days_check')
            ->allowEmpty('forward_order_days_check');

        $validator
            ->allowEmpty('forward_order_days');

        $validator
            ->allowEmpty('vee24_site_name');

        $validator
            ->allowEmpty('terms_and_conditions_content');

        $validator
            ->integer('sample_upload_active')
            ->allowEmpty('sample_upload_active');

        $validator
            ->integer('auto_enrich_options')
            ->allowEmpty('auto_enrich_options');

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
        $rules->add($rules->isUnique(['sales_org_name']));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        $rules->add($rules->existsIn(['ccefreetypes_id'], 'Ccefreetypes'));
        $rules->add($rules->existsIn(['ccechargedtypes_id'], 'Ccechargedtypes'));
        $rules->add($rules->existsIn(['ecomtypes_id'], 'Ecomtypes'));
        $rules->add($rules->existsIn(['default_language_id'], 'DefaultLanguages'));
        $rules->add($rules->existsIn(['default_region_id'], 'DefaultRegions'));
        $rules->add($rules->existsIn(['live_link_service_id'], 'LiveLinkServices'));
        $rules->add($rules->existsIn(['pop_up_id'], 'PopUps'));
        $rules->add($rules->existsIn(['timezone_id'], 'Timezones'));
        $rules->add($rules->existsIn(['shipping_condition_id'], 'ShippingConditions'));
        return $rules;
    }
}
