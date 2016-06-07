<?php
namespace App\Model\Table;

class SapccInvoicesLatestTable extends CoatsTable
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

        $this->table('coats_sapcc_invoices_latest');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
