<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SapInvoiceNw;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SapInvoiceNw Model
 *
 */
class SapInvoiceNwTable extends CoatsTable
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

        $this->table('coats_sap_invoice_nw');
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
            ->allowEmpty('sold_to_party_number');

        $validator
            ->allowEmpty('sales_org_name');

        $validator
            ->allowEmpty('so_number');

        $validator
            ->allowEmpty('order_type');

        $validator
            ->allowEmpty('po_number');

        $validator
            ->allowEmpty('sold_to_party_name');

        $validator
            ->allowEmpty('SAP_Payer_Number');

        $validator
            ->allowEmpty('ship_to_party_number');

        $validator
            ->allowEmpty('ship_to_party_name');

        $validator
            ->allowEmpty('sap_invoice_number');

        $validator
            ->allowEmpty('Net_Value');

        $validator
            ->allowEmpty('Currency');

        $validator
            ->allowEmpty('Billing_Type');

        $validator
            ->allowEmpty('Billing_Date');

        $validator
            ->allowEmpty('Payment_Due_Date');

        $validator
            ->allowEmpty('Payment_Date');

        $validator
            ->allowEmpty('Document_Number');

        $validator
            ->allowEmpty('Payment_Status');

        $validator
            ->integer('Invoice_Line_Number')
            ->requirePresence('Invoice_Line_Number', 'create')
            ->notEmpty('Invoice_Line_Number');

        $validator
            ->allowEmpty('material_Code');

        $validator
            ->allowEmpty('Invoice_Quantity');

        $validator
            ->allowEmpty('uom');

        $validator
            ->allowEmpty('sale_order_line_number');

        return $validator;
    }
}
