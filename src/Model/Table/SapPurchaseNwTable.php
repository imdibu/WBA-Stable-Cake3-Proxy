<?php
namespace App\Model\Table;

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
}
