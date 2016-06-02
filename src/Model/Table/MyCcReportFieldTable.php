<?php
namespace App\Model\Table;

class MyCcReportFieldTable extends CoatsTable
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

        $this->table('coats_my_cc_report_fields');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
