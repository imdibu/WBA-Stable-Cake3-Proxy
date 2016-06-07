<?php
namespace App\Model\Table;

/**
 * ApprovalOrderHistories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BulkOrders
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $Approvers
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 */
class ApprovalOrderHistoryTable extends CoatsTable
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

        $this->table('coats_approval_order_histories');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
