<?php
namespace App\Model\Table;

class SapccDeliverynoteTable extends CoatsTable
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

        $this->table('coats_sapcc_deliverynotes');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
