<?php
namespace App\Model\Table\Base;

use App\Model\Entity\LengthOffer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LengthOffers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Plants
 * @property \Cake\ORM\Association\BelongsTo $Brands
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $Uoms
 * @property \Cake\ORM\Association\BelongsTo $MeasurementStandards
 * @property \Cake\ORM\Association\BelongsTo $CopLengths
 * @property \Cake\ORM\Association\BelongsTo $ConeLengths
 * @property \Cake\ORM\Association\BelongsTo $ViconeLengths
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class LengthOffersTable extends CoatsTable
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

        $this->table('coats_length_offers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

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
        $this->belongsTo('Uoms', [
            'foreignKey' => 'uom_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MeasurementStandards', [
            'foreignKey' => 'measurement_standard_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CopLengths', [
            'foreignKey' => 'cop_length_id'
        ]);
        $this->belongsTo('ConeLengths', [
            'foreignKey' => 'cone_length_id'
        ]);
        $this->belongsTo('ViconeLengths', [
            'foreignKey' => 'vicone_length_id'
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
            ->allowEmpty('cop_length_id_old');

        $validator
            ->allowEmpty('cone_length_id_old');

        $validator
            ->allowEmpty('vicone_length_id_old');

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
        $rules->add($rules->existsIn(['plant_id'], 'Plants'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['uom_id'], 'Uoms'));
        $rules->add($rules->existsIn(['measurement_standard_id'], 'MeasurementStandards'));
        $rules->add($rules->existsIn(['cop_length_id'], 'CopLengths'));
        $rules->add($rules->existsIn(['cone_length_id'], 'ConeLengths'));
        $rules->add($rules->existsIn(['vicone_length_id'], 'ViconeLengths'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
