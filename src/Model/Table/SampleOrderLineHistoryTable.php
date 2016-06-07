<?php
namespace App\Model\Table;

class SampleOrderLineHistoryTable extends CoatsTable
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

        $this->table('coats_sample_order_line_histories');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
