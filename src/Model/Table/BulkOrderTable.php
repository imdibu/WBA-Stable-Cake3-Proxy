<?php
namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

/**
 * BulkOrders Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Requesters
 * @property \Cake\ORM\Association\BelongsTo $ShipToParties
 * @property \Cake\ORM\Association\BelongsTo $Buyers
 * @property \Cake\ORM\Association\BelongsTo $DeliveryModes
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $UploadFiles
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 * @property \Cake\ORM\Association\BelongsTo $CustomerServiceExecutives
 * @property \Cake\ORM\Association\BelongsTo $Payers
 * @property \Cake\ORM\Association\BelongsTo $BuyingHouses
 */
class BulkOrderTable extends CoatsTable
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

        $this->table('coats_bulk_orders');
        $this->displayField('order_no');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->notEmpty('order_no')
            ->add('order_no', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('comments');

        $validator
            ->requirePresence('po_number', 'create')
            ->notEmpty('po_number');

        $validator
            ->allowEmpty('surcharge_value');

        $validator
            ->allowEmpty('discount_value');

        $validator
            ->allowEmpty('net_value');

        $validator
            ->requirePresence('currency', 'create')
            ->notEmpty('currency');

        $validator
            ->date('shipment_date')
            ->allowEmpty('shipment_date');

        $validator
            ->allowEmpty('shipment_number');

        $validator
            ->allowEmpty('so_number');

        $validator
            ->requirePresence('style', 'create')
            ->notEmpty('style');

        $validator
            ->requirePresence('buyer_sales_orderno', 'create')
            ->notEmpty('buyer_sales_orderno');

        $validator
            ->requirePresence('requester_dn', 'create')
            ->notEmpty('requester_dn');

        $validator
            ->requirePresence('requester_invoice', 'create')
            ->notEmpty('requester_invoice');

        $validator
            ->requirePresence('style_dn', 'create')
            ->notEmpty('style_dn');

        $validator
            ->requirePresence('style_invoice', 'create')
            ->notEmpty('style_invoice');

        $validator
            ->requirePresence('buyer_sales_orderno_dn', 'create')
            ->notEmpty('buyer_sales_orderno_dn');

        $validator
            ->requirePresence('buyer_sales_orderno_invoice', 'create')
            ->notEmpty('buyer_sales_orderno_invoice');

        $validator
            ->allowEmpty('warehouse_instruction');

        $validator
            ->requirePresence('line_info_invoice', 'create')
            ->notEmpty('line_info_invoice');

        $validator
            ->requirePresence('line_info_dn', 'create')
            ->notEmpty('line_info_dn');

        $validator
            ->dateTime('Updatedtime')
            ->allowEmpty('Updatedtime');

        $validator
            ->integer('approve_workflow')
            ->requirePresence('approve_workflow', 'create')
            ->notEmpty('approve_workflow');

        $validator
            ->integer('order_line')
            ->requirePresence('order_line', 'create')
            ->notEmpty('order_line');

        $validator
            ->uuid('ssma$rowid')
            ->requirePresence('ssma$rowid', 'create')
            ->notEmpty('ssma$rowid');

        $validator
            ->integer('sub_status')
            ->allowEmpty('sub_status');

        $validator
            ->integer('FailedToSendSAP')
            ->requirePresence('FailedToSendSAP', 'create')
            ->notEmpty('FailedToSendSAP');

        $validator
            ->allowEmpty('contract_po_number');

        $validator
            ->integer('contract_customer')
            ->allowEmpty('contract_customer');

        return $validator;
    }
}
