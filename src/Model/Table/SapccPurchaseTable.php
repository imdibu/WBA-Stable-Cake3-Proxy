<?php
namespace App\Model\Table;

class SapccPurchaseTable extends CoatsTable
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
    }
}
