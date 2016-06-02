<?php
namespace App\Model\Table;

class TotalOrderReportFieldTable extends CoatsTable
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

        $this->table('coats_total_order_report_fields');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
