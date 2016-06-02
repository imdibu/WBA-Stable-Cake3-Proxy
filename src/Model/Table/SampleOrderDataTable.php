<?php
namespace App\Model\Table;

class SampleOrderDataTable extends CoatsTable
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

        $this->table('coats_sample_order_data');
        $this->displayField('order_id');
        $this->primaryKey('order_id');
    }
}
