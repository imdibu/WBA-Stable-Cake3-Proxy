<?php
namespace App\Model\Table\Base;

use App\Model\Entity\DuplicateUploadFile;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DuplicateUploadFiles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Customers
 */
class DuplicateUploadFilesTable extends CoatsTable
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

        $this->table('coats_duplicate_upload_files');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
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
            ->allowEmpty('upload_file_name');

        $validator
            ->dateTime('upload_time')
            ->allowEmpty('upload_time');

        $validator
            ->allowEmpty('uploaded_by');

        $validator
            ->allowEmpty('error_message');

        $validator
            ->integer('source_type')
            ->allowEmpty('source_type');

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
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
