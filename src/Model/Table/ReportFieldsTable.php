<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ReportField;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReportFields Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentReportFields
 * @property \Cake\ORM\Association\HasMany $ChildReportFields
 */
class ReportFieldsTable extends CoatsTable
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

        $this->table('coats_report_fields');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('ParentReportFields', [
            'className' => 'ReportFields',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildReportFields', [
            'className' => 'ReportFields',
            'foreignKey' => 'parent_id'
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
            ->requirePresence('field', 'create')
            ->notEmpty('field');

        $validator
            ->allowEmpty('label');

        $validator
            ->boolean('readonly')
            ->allowEmpty('readonly');

        $validator
            ->allowEmpty('display_field');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentReportFields'));
        return $rules;
    }
}
