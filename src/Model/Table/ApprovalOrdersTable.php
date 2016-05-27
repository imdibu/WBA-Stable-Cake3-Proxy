<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ApprovalOrder;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ApprovalOrders Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BulkOrders
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $Approvers
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 */
class ApprovalOrdersTable extends CoatsTable
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

        $this->belongsTo('BulkOrders', [
            'foreignKey' => 'bulk_order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Approvers', [
            'foreignKey' => 'approver_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('bulk_order_no', 'create')
            ->notEmpty('bulk_order_no');

        $validator
            ->dateTime('approve_time')
            ->allowEmpty('approve_time');

        $validator
            ->allowEmpty('total_value');

        $validator
            ->allowEmpty('reason');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['bulk_order_id'], 'BulkOrders'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['approver_id'], 'Approvers'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        return $rules;
    }
}
