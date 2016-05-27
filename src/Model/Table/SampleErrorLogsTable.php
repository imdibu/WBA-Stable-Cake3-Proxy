<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SampleErrorLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleErrorLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $Lines
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 */
class SampleErrorLogsTable extends CoatsTable
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

        $this->table('coats_sample_error_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id'
        ]);
        $this->belongsTo('Lines', [
            'foreignKey' => 'line_id'
        ]);
        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id'
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
            ->allowEmpty('file_name');

        $validator
            ->integer('source_type')
            ->allowEmpty('source_type');

        $validator
            ->allowEmpty('error_message');

        $validator
            ->integer('uploaded_by')
            ->allowEmpty('uploaded_by');

        $validator
            ->dateTime('failed_time')
            ->allowEmpty('failed_time');

        $validator
            ->allowEmpty('requestor_first_name');

        $validator
            ->allowEmpty('requestor_last_name');

        $validator
            ->allowEmpty('requestor_email');

        $validator
            ->allowEmpty('customer_name');

        $validator
            ->allowEmpty('downloadfilename');

        $validator
            ->integer('is_deleted')
            ->allowEmpty('is_deleted');

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
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['line_id'], 'Lines'));
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        return $rules;
    }
}
