<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ShipToParty;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShipToParties Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Fces
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Hubs
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class ShipToPartiesTable extends CoatsTable
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

        $this->table('coats_ship_to_parties');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fces', [
            'foreignKey' => 'fce_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hubs', [
            'foreignKey' => 'hub_id',
            'joinType' => 'INNER'
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
            ->requirePresence('ship_to_party_no', 'create')
            ->notEmpty('ship_to_party_no');

        $validator
            ->requirePresence('ship_to_party_name', 'create')
            ->notEmpty('ship_to_party_name');

        $validator
            ->allowEmpty('address_line1');

        $validator
            ->allowEmpty('address_line2');

        $validator
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->requirePresence('zip_code', 'create')
            ->notEmpty('zip_code');

        $validator
            ->integer('direct_distribution')
            ->requirePresence('direct_distribution', 'create')
            ->notEmpty('direct_distribution');

        $validator
            ->allowEmpty('latitude');

        $validator
            ->allowEmpty('longitude');

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
        $rules->add($rules->existsIn(['fce_id'], 'Fces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['hub_id'], 'Hubs'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
