<?php
namespace App\Model\Table;

class ApprovalOrderTable extends CoatsTable
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

        $this->table('coats_approval_orders');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
