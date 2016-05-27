<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SapccPayment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SapccPayments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 */
class SapccPaymentsTable extends CoatsTable
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

        $this->table('coats_sapcc_payments');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('customer_code', 'create')
            ->notEmpty('customer_code');

        $validator
            ->requirePresence('sales_org_name', 'create')
            ->notEmpty('sales_org_name');

        $validator
            ->requirePresence('currency', 'create')
            ->notEmpty('currency');

        $validator
            ->requirePresence('overdue_after_30_days', 'create')
            ->notEmpty('overdue_after_30_days');

        $validator
            ->requirePresence('overdue_after_60_days', 'create')
            ->notEmpty('overdue_after_60_days');

        $validator
            ->requirePresence('overdue_after_90_days', 'create')
            ->notEmpty('overdue_after_90_days');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
