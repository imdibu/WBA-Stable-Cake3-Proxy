<?php
namespace App\Model\Table;

class ReportUomFieldTable extends CoatsTable
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

        $this->table('coats_report_uom_fields');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
