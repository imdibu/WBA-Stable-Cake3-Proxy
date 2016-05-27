<?php
namespace App\Model\Table\Base;

use App\Model\Entity\MarketingNewfeature;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MarketingNewfeatures Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $AccessTypes
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 */
class MarketingNewfeaturesTable extends CoatsTable
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

        $this->table('coats_marketing_newfeatures');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AccessTypes', [
            'foreignKey' => 'access_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id'
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
            ->requirePresence('feature_title', 'create')
            ->notEmpty('feature_title');

        $validator
            ->requirePresence('feature_description', 'create')
            ->notEmpty('feature_description');

        $validator
            ->allowEmpty('sales_org_name');

        $validator
            ->allowEmpty('upload_filename');

        $validator
            ->dateTime('availabelon')
            ->allowEmpty('availabelon');

        $validator
            ->allowEmpty('uniqfilename');

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
        $rules->add($rules->existsIn(['access_type_id'], 'AccessTypes'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        return $rules;
    }
}
