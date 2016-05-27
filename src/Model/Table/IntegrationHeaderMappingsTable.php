<?php
namespace App\Model\Table\Base;

use App\Model\Entity\IntegrationHeaderMapping;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IntegrationHeaderMappings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $BulkorderSalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $BulkorderShipToParties
 * @property \Cake\ORM\Association\BelongsTo $BulkorderCustomers
 * @property \Cake\ORM\Association\BelongsTo $BulkorderlineArticles
 * @property \Cake\ORM\Association\BelongsTo $BulkorderlineBrands
 * @property \Cake\ORM\Association\BelongsTo $BulkorderlineTickets
 * @property \Cake\ORM\Association\BelongsTo $BulkorderlineLengths
 * @property \Cake\ORM\Association\BelongsTo $BulkorderlineFinishes
 * @property \Cake\ORM\Association\BelongsTo $BulkorderBuyers
 * @property \Cake\ORM\Association\BelongsTo $BulkorderlineShades
 * @property \Cake\ORM\Association\BelongsTo $BulkorderRequesters
 * @property \Cake\ORM\Association\BelongsTo $BulkorderPayers
 * @property \Cake\ORM\Association\BelongsTo $BulkorderBuyingHouses
 */
class IntegrationHeaderMappingsTable extends CoatsTable
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

        $this->table('coats_integration_header_mappings');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BulkorderSalesOrgs', [
            'foreignKey' => 'bulkorder_sales_org_id'
        ]);
        $this->belongsTo('BulkorderShipToParties', [
            'foreignKey' => 'bulkorder_ship_to_party_id'
        ]);
        $this->belongsTo('BulkorderCustomers', [
            'foreignKey' => 'bulkorder_customer_id'
        ]);
        $this->belongsTo('BulkorderlineArticles', [
            'foreignKey' => 'bulkorderline_article_id'
        ]);
        $this->belongsTo('BulkorderlineBrands', [
            'foreignKey' => 'bulkorderline_brand_id'
        ]);
        $this->belongsTo('BulkorderlineTickets', [
            'foreignKey' => 'bulkorderline_ticket_id'
        ]);
        $this->belongsTo('BulkorderlineLengths', [
            'foreignKey' => 'bulkorderline_length_id'
        ]);
        $this->belongsTo('BulkorderlineFinishes', [
            'foreignKey' => 'bulkorderline_finish_id'
        ]);
        $this->belongsTo('BulkorderBuyers', [
            'foreignKey' => 'bulkorder_buyer_id'
        ]);
        $this->belongsTo('BulkorderlineShades', [
            'foreignKey' => 'bulkorderline_shade_id'
        ]);
        $this->belongsTo('BulkorderRequesters', [
            'foreignKey' => 'bulkorder_requester_id'
        ]);
        $this->belongsTo('BulkorderPayers', [
            'foreignKey' => 'bulkorder_payer_id'
        ]);
        $this->belongsTo('BulkorderBuyingHouses', [
            'foreignKey' => 'bulkorder_buying_house_id'
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
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('bulkorderline_customer_material_no');

        $validator
            ->allowEmpty('bulkorder_po_number');

        $validator
            ->allowEmpty('bulkorderline_required_date');

        $validator
            ->allowEmpty('bulkorderline_ordered_quantity');

        $validator
            ->allowEmpty('bulkorder_warehouse_instruction');

        $validator
            ->allowEmpty('bulkorder_style');

        $validator
            ->allowEmpty('bulkorder_buyer_sales_orderno');

        $validator
            ->allowEmpty('bulkorderline_prod_style_no');

        $validator
            ->allowEmpty('bulkorderline_otherinfo');

        $validator
            ->allowEmpty('customer_dateformat');

        $validator
            ->allowEmpty('php_equivalent_dateformat');

        $validator
            ->allowEmpty('buyer');

        $validator
            ->allowEmpty('delimeter_char');

        $validator
            ->allowEmpty('mappingprocesstype');

        $validator
            ->requirePresence('bulkorderline_customer_price', 'create')
            ->notEmpty('bulkorderline_customer_price');

        $validator
            ->allowEmpty('bulkorderline_contract');

        $validator
            ->allowEmpty('bulkorderline_line_reference');

        $validator
            ->allowEmpty('bulkorderline_combinedarticleshade');

        $validator
            ->allowEmpty('bulkorder_contract_customer');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['bulkorder_sales_org_id'], 'BulkorderSalesOrgs'));
        $rules->add($rules->existsIn(['bulkorder_ship_to_party_id'], 'BulkorderShipToParties'));
        $rules->add($rules->existsIn(['bulkorder_customer_id'], 'BulkorderCustomers'));
        $rules->add($rules->existsIn(['bulkorderline_article_id'], 'BulkorderlineArticles'));
        $rules->add($rules->existsIn(['bulkorderline_brand_id'], 'BulkorderlineBrands'));
        $rules->add($rules->existsIn(['bulkorderline_ticket_id'], 'BulkorderlineTickets'));
        $rules->add($rules->existsIn(['bulkorderline_length_id'], 'BulkorderlineLengths'));
        $rules->add($rules->existsIn(['bulkorderline_finish_id'], 'BulkorderlineFinishes'));
        $rules->add($rules->existsIn(['bulkorder_buyer_id'], 'BulkorderBuyers'));
        $rules->add($rules->existsIn(['bulkorderline_shade_id'], 'BulkorderlineShades'));
        $rules->add($rules->existsIn(['bulkorder_requester_id'], 'BulkorderRequesters'));
        $rules->add($rules->existsIn(['bulkorder_payer_id'], 'BulkorderPayers'));
        $rules->add($rules->existsIn(['bulkorder_buying_house_id'], 'BulkorderBuyingHouses'));
        return $rules;
    }
}
