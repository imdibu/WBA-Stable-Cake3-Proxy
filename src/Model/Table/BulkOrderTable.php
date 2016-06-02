<?php
namespace App\Model\Table;

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
    }
}
