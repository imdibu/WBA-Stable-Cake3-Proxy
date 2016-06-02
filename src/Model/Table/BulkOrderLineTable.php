<?php
namespace App\Model\Table;

class BulkOrderLineTable extends CoatsTable
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

        $this->table('coats_bulk_order_lines');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
