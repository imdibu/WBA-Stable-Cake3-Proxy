<?php
namespace App\Model\Table;

/**
 * ApproveStatuses Model
 *
 */
class ApproveStatusTable extends CoatsTable
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

        $this->table('coats_approve_statuses');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
