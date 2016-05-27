<?php
namespace App\Model\Table\Base;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $DeliveryPlants
 * @property \Cake\ORM\Association\BelongsTo $CceSolutions
 * @property \Cake\ORM\Association\BelongsTo $Priorities
 * @property \Cake\ORM\Association\BelongsTo $AccessTypes
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 * @property \Cake\ORM\Association\BelongsTo $ShipNotices
 * @property \Cake\ORM\Association\BelongsTo $CustomerServiceExecutives
 * @property \Cake\ORM\Association\BelongsTo $DeliveryModes
 * @property \Cake\ORM\Association\BelongsTo $Ccefreeordertypes
 * @property \Cake\ORM\Association\BelongsTo $Ccechargedordertypes
 * @property \Cake\ORM\Association\BelongsTo $Ecomordertypes
 * @property \Cake\ORM\Association\BelongsTo $Printreqheaders
 * @property \Cake\ORM\Association\BelongsTo $Printstyleheaders
 * @property \Cake\ORM\Association\BelongsTo $Printbuyerheaders
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $Popups
 * @property \Cake\ORM\Association\BelongsTo $AutoEnrichStocks
 * @property \Cake\ORM\Association\BelongsTo $ShippingConditions
 */
class CustomersTable extends CoatsTable
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

        $this->table('coats_customers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DeliveryPlants', [
            'foreignKey' => 'delivery_plant_id'
        ]);
        $this->belongsTo('CceSolutions', [
            'foreignKey' => 'cce_solution_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Priorities', [
            'foreignKey' => 'priority_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AccessTypes', [
            'foreignKey' => 'access_type_id',
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
        $this->belongsTo('ShipNotices', [
            'foreignKey' => 'ship_notice_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CustomerServiceExecutives', [
            'foreignKey' => 'customer_service_executive_id'
        ]);
        $this->belongsTo('DeliveryModes', [
            'foreignKey' => 'delivery_mode_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Ccefreeordertypes', [
            'foreignKey' => 'ccefreeordertypes_id'
        ]);
        $this->belongsTo('Ccechargedordertypes', [
            'foreignKey' => 'ccechargedordertypes_id'
        ]);
        $this->belongsTo('Ecomordertypes', [
            'foreignKey' => 'ecomordertypes_id'
        ]);
        $this->belongsTo('Printreqheaders', [
            'foreignKey' => 'printreqheaders_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Printstyleheaders', [
            'foreignKey' => 'printstyleheaders_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Printbuyerheaders', [
            'foreignKey' => 'printbuyerheaders_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'Status_id'
        ]);
        $this->belongsTo('Popups', [
            'foreignKey' => 'popup_id'
        ]);
        $this->belongsTo('AutoEnrichStocks', [
            'foreignKey' => 'auto_enrich_stock_id'
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
            ->requirePresence('customer_name', 'create')
            ->notEmpty('customer_name');

        $validator
            ->requirePresence('customer_code', 'create')
            ->notEmpty('customer_code');

        $validator
            ->integer('no_of_options')
            ->requirePresence('no_of_options', 'create')
            ->notEmpty('no_of_options');

        $validator
            ->integer('is_duplicate')
            ->requirePresence('is_duplicate', 'create')
            ->notEmpty('is_duplicate');

        $validator
            ->allowEmpty('common_email');

        $validator
            ->allowEmpty('comments');

        $validator
            ->integer('exclude_delivery_mode_display')
            ->allowEmpty('exclude_delivery_mode_display');

        $validator
            ->integer('exclude_from_dye_lot')
            ->allowEmpty('exclude_from_dye_lot');

        $validator
            ->allowEmpty('length_of_material_no');

        $validator
            ->allowEmpty('position_of_brand');

        $validator
            ->allowEmpty('position_of_ticket');

        $validator
            ->allowEmpty('position_of_length');

        $validator
            ->allowEmpty('position_of_finish');

        $validator
            ->allowEmpty('position_of_shade');

        $validator
            ->integer('use_coats_option')
            ->allowEmpty('use_coats_option');

        $validator
            ->integer('product_availability_check')
            ->requirePresence('product_availability_check', 'create')
            ->notEmpty('product_availability_check');

        $validator
            ->allowEmpty('allow_to_send_WH_instruction');

        $validator
            ->integer('cust_add_header_info_header')
            ->requirePresence('cust_add_header_info_header', 'create')
            ->notEmpty('cust_add_header_info_header');

        $validator
            ->integer('cust_add_line_info_line')
            ->requirePresence('cust_add_line_info_line', 'create')
            ->notEmpty('cust_add_line_info_line');

        $validator
            ->integer('print_line_info')
            ->requirePresence('print_line_info', 'create')
            ->notEmpty('print_line_info');

        $validator
            ->integer('cust_mdq_enabled')
            ->requirePresence('cust_mdq_enabled', 'create')
            ->notEmpty('cust_mdq_enabled');

        $validator
            ->allowEmpty('division');

        $validator
            ->allowEmpty('distribution_channel');

        $validator
            ->integer('approval_workflow')
            ->requirePresence('approval_workflow', 'create')
            ->notEmpty('approval_workflow');

        $validator
            ->allowEmpty('IS_CAPABLE_OF_CAD_DESIGN_ORDER');

        $validator
            ->allowEmpty('IS_CAPABLE_FOR_3D_PRINT_ORDER');

        $validator
            ->allowEmpty('IS_CAPABLE_OF_PROTOPUL_ORDER');

        $validator
            ->allowEmpty('IS_CAPABLE_OF_MOULD_ORDER');

        $validator
            ->integer('payer_enabled')
            ->allowEmpty('payer_enabled');

        $validator
            ->integer('enable_live_link')
            ->allowEmpty('enable_live_link');

        $validator
            ->integer('allow_clean_failed_files')
            ->allowEmpty('allow_clean_failed_files');

        $validator
            ->integer('cus_orders_without_shade')
            ->requirePresence('cus_orders_without_shade', 'create')
            ->notEmpty('cus_orders_without_shade');

        $validator
            ->integer('HX_Active')
            ->requirePresence('HX_Active', 'create')
            ->notEmpty('HX_Active');

        $validator
            ->integer('AX_Active')
            ->requirePresence('AX_Active', 'create')
            ->notEmpty('AX_Active');

        $validator
            ->integer('off_order')
            ->allowEmpty('off_order');

        $validator
            ->integer('off_order_type')
            ->allowEmpty('off_order_type');

        $validator
            ->integer('combined_order')
            ->allowEmpty('combined_order');

        $validator
            ->integer('new_sftp_server')
            ->allowEmpty('new_sftp_server');

        $validator
            ->integer('cce_priority')
            ->allowEmpty('cce_priority');

        $validator
            ->integer('enable_tnc')
            ->requirePresence('enable_tnc', 'create')
            ->notEmpty('enable_tnc');

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
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        $rules->add($rules->existsIn(['delivery_plant_id'], 'DeliveryPlants'));
        $rules->add($rules->existsIn(['cce_solution_id'], 'CceSolutions'));
        $rules->add($rules->existsIn(['priority_id'], 'Priorities'));
        $rules->add($rules->existsIn(['access_type_id'], 'AccessTypes'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        $rules->add($rules->existsIn(['ship_notice_id'], 'ShipNotices'));
        $rules->add($rules->existsIn(['customer_service_executive_id'], 'CustomerServiceExecutives'));
        $rules->add($rules->existsIn(['delivery_mode_id'], 'DeliveryModes'));
        $rules->add($rules->existsIn(['ccefreeordertypes_id'], 'Ccefreeordertypes'));
        $rules->add($rules->existsIn(['ccechargedordertypes_id'], 'Ccechargedordertypes'));
        $rules->add($rules->existsIn(['ecomordertypes_id'], 'Ecomordertypes'));
        $rules->add($rules->existsIn(['printreqheaders_id'], 'Printreqheaders'));
        $rules->add($rules->existsIn(['printstyleheaders_id'], 'Printstyleheaders'));
        $rules->add($rules->existsIn(['printbuyerheaders_id'], 'Printbuyerheaders'));
        $rules->add($rules->existsIn(['Status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['popup_id'], 'Popups'));
        $rules->add($rules->existsIn(['auto_enrich_stock_id'], 'AutoEnrichStocks'));
        $rules->add($rules->existsIn(['shipping_condition_id'], 'ShippingConditions'));
        return $rules;
    }
}
