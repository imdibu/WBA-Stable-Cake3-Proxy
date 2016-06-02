<?php
namespace App\Model\Table;

class SampleOrderLineDataTable extends CoatsTable
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

        $this->table('coats_sample_order_line_data');
        $this->displayField('order_line_id');
        $this->primaryKey('order_line_id');
    }
}
