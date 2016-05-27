<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SampleOrder;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleOrders Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $ShipToParties
 * @property \Cake\ORM\Association\BelongsTo $Requesters
 * @property \Cake\ORM\Association\BelongsTo $BusinessPrincipals
 * @property \Cake\ORM\Association\BelongsTo $LsPrimaries
 * @property \Cake\ORM\Association\BelongsTo $LsSecondaries
 * @property \Cake\ORM\Association\BelongsTo $LsThirds
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 * @property \Cake\ORM\Association\BelongsTo $Hubs
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Regions
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Fces
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $Payers
 * @property \Cake\ORM\Association\BelongsTo $BuyingHouses
 * @property \Cake\ORM\Association\BelongsTo $Sources
 * @property \Cake\ORM\Association\BelongsTo $UploadFiles
 */
class SampleOrdersTable extends CoatsTable
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

        $this->table('coats_sample_orders');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ShipToParties', [
            'foreignKey' => 'ship_to_party_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Requesters', [
            'foreignKey' => 'requester_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BusinessPrincipals', [
            'foreignKey' => 'business_principal_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LsPrimaries', [
            'foreignKey' => 'ls_primary_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LsSecondaries', [
            'foreignKey' => 'ls_secondary_id'
        ]);
        $this->belongsTo('LsThirds', [
            'foreignKey' => 'ls_third_id'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id'
        ]);
        $this->belongsTo('UpdatedUsers', [
            'foreignKey' => 'updated_user_id'
        ]);
        $this->belongsTo('Hubs', [
            'foreignKey' => 'hub_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
        ]);
        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fces', [
            'foreignKey' => 'fce_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Payers', [
            'foreignKey' => 'payer_id'
        ]);
        $this->belongsTo('BuyingHouses', [
            'foreignKey' => 'buying_house_id'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id'
        ]);
        $this->belongsTo('UploadFiles', [
            'foreignKey' => 'upload_file_id'
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
            ->requirePresence('order_no', 'create')
            ->notEmpty('order_no');

        $validator
            ->integer('rematch_seq')
            ->requirePresence('rematch_seq', 'create')
            ->notEmpty('rematch_seq');

        $validator
            ->dateTime('requested_edc')
            ->allowEmpty('requested_edc');

        $validator
            ->uuid('ssma$rowid')
            ->requirePresence('ssma$rowid', 'create')
            ->notEmpty('ssma$rowid')
            ->add('ssma$rowid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['ssma$rowid']));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['ship_to_party_id'], 'ShipToParties'));
        $rules->add($rules->existsIn(['requester_id'], 'Requesters'));
        $rules->add($rules->existsIn(['business_principal_id'], 'BusinessPrincipals'));
        $rules->add($rules->existsIn(['ls_primary_id'], 'LsPrimaries'));
        $rules->add($rules->existsIn(['ls_secondary_id'], 'LsSecondaries'));
        $rules->add($rules->existsIn(['ls_third_id'], 'LsThirds'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        $rules->add($rules->existsIn(['hub_id'], 'Hubs'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        $rules->add($rules->existsIn(['fce_id'], 'Fces'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['payer_id'], 'Payers'));
        $rules->add($rules->existsIn(['buying_house_id'], 'BuyingHouses'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));
        $rules->add($rules->existsIn(['upload_file_id'], 'UploadFiles'));
        return $rules;
    }
}
