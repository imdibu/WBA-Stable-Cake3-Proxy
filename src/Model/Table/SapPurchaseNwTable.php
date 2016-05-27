<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SapPurchaseNw;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SapPurchaseNw Model
 *
 */
class SapPurchaseNwTable extends CoatsTable
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

        $this->table('coats_sap_Purchase_nw');
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
            ->allowEmpty('Purchare_Date');

        $validator
            ->allowEmpty('Requried_Delivery_date');

        $validator
            ->allowEmpty('ship_to_party_number');

        $validator
            ->allowEmpty('Business_Principle_Number');

        $validator
            ->allowEmpty('SAP_Payer_Number');

        $validator
            ->allowEmpty('ship_to_party_name');

        $validator
            ->allowEmpty('sold_to_party_name');

        $validator
            ->allowEmpty('sale_order_line_number');

        $validator
            ->allowEmpty('material_Code');

        $validator
            ->allowEmpty('delivery_quantity');

        $validator
            ->allowEmpty('uom');

        return $validator;
    }
}
