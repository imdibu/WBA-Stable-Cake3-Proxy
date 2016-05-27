<?php
namespace App\Model\Table\Base;

use App\Model\Entity\RequestorBusinessprincipal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RequestorBusinessprincipals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Buyers
 */
class RequestorBusinessprincipalsTable extends CoatsTable
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

        $this->table('coats_requestor_businessprincipals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Buyers', [
            'foreignKey' => 'buyer_id',
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
            ->allowEmpty('user_email');

        $validator
            ->allowEmpty('business_principal_no');

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
        $rules->add($rules->existsIn(['buyer_id'], 'Buyers'));
        return $rules;
    }
}
