<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SalesOrgMaterial;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesOrgMaterials Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Plants
 * @property \Cake\ORM\Association\BelongsTo $Brands
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $MumTypes
 * @property \Cake\ORM\Association\BelongsTo $Lengths
 * @property \Cake\ORM\Association\BelongsTo $BulkSamples
 * @property \Cake\ORM\Association\BelongsTo $Finishes
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class SalesOrgMaterialsTable extends CoatsTable
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

        $this->table('coats_sales_org_materials');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plants', [
            'foreignKey' => 'plant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MumTypes', [
            'foreignKey' => 'mum_type_id'
        ]);
        $this->belongsTo('Lengths', [
            'foreignKey' => 'length_id'
        ]);
        $this->belongsTo('BulkSamples', [
            'foreignKey' => 'bulk_sample_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Finishes', [
            'foreignKey' => 'finish_id'
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
            ->requirePresence('article', 'create')
            ->notEmpty('article');

        $validator
            ->allowEmpty('unit');

        $validator
            ->integer('is_default')
            ->requirePresence('is_default', 'create')
            ->notEmpty('is_default');

        $validator
            ->integer('is_private')
            ->requirePresence('is_private', 'create')
            ->notEmpty('is_private');

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
        $rules->add($rules->existsIn(['plant_id'], 'Plants'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['mum_type_id'], 'MumTypes'));
        $rules->add($rules->existsIn(['length_id'], 'Lengths'));
        $rules->add($rules->existsIn(['bulk_sample_id'], 'BulkSamples'));
        $rules->add($rules->existsIn(['finish_id'], 'Finishes'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
