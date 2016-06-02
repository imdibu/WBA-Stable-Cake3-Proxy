<?php
namespace App\Model\Table;

/**
 * ApproverLists Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Requesters
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 */
class ApproverListTable extends CoatsTable
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

        $this->table('coats_approver_lists');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
