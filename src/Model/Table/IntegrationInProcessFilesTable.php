<?php
namespace App\Model\Table\Base;

use App\Model\Entity\IntegrationInProcessFile;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IntegrationInProcessFiles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 */
class IntegrationInProcessFilesTable extends CoatsTable
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

        $this->table('coats_integration_in_process_files');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
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
            ->allowEmpty('is_inprocess');

        $validator
            ->integer('uploaded_by')
            ->allowEmpty('uploaded_by');

        $validator
            ->dateTime('uploaded_time')
            ->allowEmpty('uploaded_time');

        $validator
            ->allowEmpty('uploadedby_name');

        $validator
            ->allowEmpty('customer_name');

        $validator
            ->requirePresence('downloadfilename', 'create')
            ->notEmpty('downloadfilename');

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
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        return $rules;
    }
}
