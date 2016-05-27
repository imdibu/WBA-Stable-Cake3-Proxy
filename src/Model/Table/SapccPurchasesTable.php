<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SapccPurchase;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SapccPurchases Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $ShipToParties
 * @property \Cake\ORM\Association\BelongsTo $Buyers
 * @property \Cake\ORM\Association\BelongsTo $Brands
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $Lengths
 * @property \Cake\ORM\Association\BelongsTo $Finishes
 * @property \Cake\ORM\Association\BelongsTo $Shades
 * @property \Cake\ORM\Association\BelongsTo $Requesters
 */
class SapccPurchasesTable extends CoatsTable
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

        $this->table('coats_sapcc_purchases');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id'
        ]);
        $this->belongsTo('ShipToParties', [
            'foreignKey' => 'ship_to_party_id'
        ]);
        $this->belongsTo('Buyers', [
            'foreignKey' => 'buyer_id'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id'
        ]);
        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->belongsTo('Lengths', [
            'foreignKey' => 'length_id'
        ]);
        $this->belongsTo('Finishes', [
            'foreignKey' => 'finish_id'
        ]);
        $this->belongsTo('Shades', [
            'foreignKey' => 'shade_id'
        ]);
        $this->belongsTo('Requesters', [
            'foreignKey' => 'requester_id'
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
            ->integer('order_number')
            ->allowEmpty('order_number');

        $validator
            ->requirePresence('customer_code', 'create')
            ->notEmpty('customer_code');

        $validator
            ->allowEmpty('customer_name');

        $validator
            ->requirePresence('sales_org_name', 'create')
            ->notEmpty('sales_org_name');

        $validator
            ->integer('sap_order_no')
            ->requirePresence('sap_order_no', 'create')
            ->notEmpty('sap_order_no');

        $validator
            ->integer('sap_order_line_no')
            ->requirePresence('sap_order_line_no', 'create')
            ->notEmpty('sap_order_line_no');

        $validator
            ->allowEmpty('order_type');

        $validator
            ->allowEmpty('po_number');

        $validator
            ->allowEmpty('payer_number');

        $validator
            ->allowEmpty('ship_to_party_name');

        $validator
            ->allowEmpty('ship_to_party_code');

        $validator
            ->date('po_date')
            ->allowEmpty('po_date');

        $validator
            ->date('req_del_date')
            ->allowEmpty('req_del_date');

        $validator
            ->allowEmpty('buyer_name');

        $validator
            ->allowEmpty('buyer_code');

        $validator
            ->allowEmpty('material');

        $validator
            ->allowEmpty('brand_name');

        $validator
            ->allowEmpty('ticket_name');

        $validator
            ->allowEmpty('length_name');

        $validator
            ->allowEmpty('finish_name');

        $validator
            ->allowEmpty('shade_code');

        $validator
            ->integer('purchase_quantity')
            ->requirePresence('purchase_quantity', 'create')
            ->notEmpty('purchase_quantity');

        $validator
            ->requirePresence('uom', 'create')
            ->notEmpty('uom');

        $validator
            ->allowEmpty('requester_name');

        $validator
            ->allowEmpty('style');

        $validator
            ->allowEmpty('buyer_sales_orderno');

        $validator
            ->allowEmpty('prod_style_no');

        $validator
            ->allowEmpty('otherinfo');

        $validator
            ->allowEmpty('customer_material_no');

        $validator
            ->integer('delivered_qty')
            ->allowEmpty('delivered_qty');

        $validator
            ->date('promised_date')
            ->allowEmpty('promised_date');

        $validator
            ->dateTime('cr_date')
            ->allowEmpty('cr_date');

        $validator
            ->dateTime('updated_date')
            ->allowEmpty('updated_date');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        $rules->add($rules->existsIn(['ship_to_party_id'], 'ShipToParties'));
        $rules->add($rules->existsIn(['buyer_id'], 'Buyers'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['length_id'], 'Lengths'));
        $rules->add($rules->existsIn(['finish_id'], 'Finishes'));
        $rules->add($rules->existsIn(['shade_id'], 'Shades'));
        $rules->add($rules->existsIn(['requester_id'], 'Requesters'));
        return $rules;
    }
}
