<?php
namespace App\Model\Table;

/**
 * ApprovalOrderSources Model
 *
 */
class ApprovalOrderSourceTable extends CoatsTable
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

        $this->table('coats_approval_order_sources');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
