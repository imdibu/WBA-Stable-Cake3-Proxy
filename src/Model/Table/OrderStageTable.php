<?php
namespace App\Model\Table;

class OrderStageTable extends CoatsTable
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

        $this->table('coats_order_stages');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
