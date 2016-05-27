<?php
namespace App\Model\Table\Base;

use App\Model\Entity\BusinessPrincipal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessPrincipals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $LightSource1sts
 * @property \Cake\ORM\Association\BelongsTo $LightSource2nds
 * @property \Cake\ORM\Association\BelongsTo $LightSource3rds
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class BusinessPrincipalsTable extends CoatsTable
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

        $this->table('coats_business_principals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LightSource1sts', [
            'foreignKey' => 'light_source_1st_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LightSource2nds', [
            'foreignKey' => 'light_source_2nd_id'
        ]);
        $this->belongsTo('LightSource3rds', [
            'foreignKey' => 'light_source_3rd_id'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UpdatedUsers', [
            'foreignKey' => 'updated_user_id',
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
            ->requirePresence('business_principal_name', 'create')
            ->notEmpty('business_principal_name');

        $validator
            ->requirePresence('business_principal_no', 'create')
            ->notEmpty('business_principal_no')
            ->add('business_principal_no', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['business_principal_no']));
        $rules->add($rules->existsIn(['light_source_1st_id'], 'LightSource1sts'));
        $rules->add($rules->existsIn(['light_source_2nd_id'], 'LightSource2nds'));
        $rules->add($rules->existsIn(['light_source_3rd_id'], 'LightSource3rds'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
