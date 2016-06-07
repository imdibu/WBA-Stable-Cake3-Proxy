<?php
namespace App\Model\Table;

class HubStockTable extends CoatsTable
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

        $this->table('coats_hub_stocks');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
