<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SampleOrderLine;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleOrderLines Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $Articles
 * @property \Cake\ORM\Association\BelongsTo $Brands
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $MumTypes
 * @property \Cake\ORM\Association\BelongsTo $OrderTypes
 * @property \Cake\ORM\Association\BelongsTo $RequestTypes
 * @property \Cake\ORM\Association\BelongsTo $Scenarios
 * @property \Cake\ORM\Association\BelongsTo $Shades
 * @property \Cake\ORM\Association\BelongsTo $StartingShades
 * @property \Cake\ORM\Association\BelongsTo $Fabrics
 * @property \Cake\ORM\Association\BelongsTo $PurposeTypes
 * @property \Cake\ORM\Association\BelongsTo $DeliveryPlants
 * @property \Cake\ORM\Association\BelongsTo $SupplyPlants
 * @property \Cake\ORM\Association\BelongsTo $FinalShades
 * @property \Cake\ORM\Association\BelongsTo $Sos
 * @property \Cake\ORM\Association\BelongsTo $Stages
 * @property \Cake\ORM\Association\BelongsTo $SapOrderStatuses
 * @property \Cake\ORM\Association\BelongsTo $CancelReasons
 * @property \Cake\ORM\Association\BelongsTo $FeedbackRequesters
 * @property \Cake\ORM\Association\BelongsTo $RejectionCodes
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 * @property \Cake\ORM\Association\BelongsTo $ParentLines
 */
class SampleOrderLinesTable extends CoatsTable
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

        $this->table('coats_sample_order_lines');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id'
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
        $this->belongsTo('OrderTypes', [
            'foreignKey' => 'order_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RequestTypes', [
            'foreignKey' => 'request_type_id'
        ]);
        $this->belongsTo('Scenarios', [
            'foreignKey' => 'scenario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Shades', [
            'foreignKey' => 'shade_id'
        ]);
        $this->belongsTo('StartingShades', [
            'foreignKey' => 'starting_shade_id'
        ]);
        $this->belongsTo('Fabrics', [
            'foreignKey' => 'fabric_id'
        ]);
        $this->belongsTo('PurposeTypes', [
            'foreignKey' => 'purpose_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DeliveryPlants', [
            'foreignKey' => 'delivery_plant_id'
        ]);
        $this->belongsTo('SupplyPlants', [
            'foreignKey' => 'supply_plant_id'
        ]);
        $this->belongsTo('FinalShades', [
            'foreignKey' => 'final_shade_id'
        ]);
        $this->belongsTo('Sos', [
            'foreignKey' => 'sos_id'
        ]);
        $this->belongsTo('Stages', [
            'foreignKey' => 'stage_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SapOrderStatuses', [
            'foreignKey' => 'sap_order_status_id'
        ]);
        $this->belongsTo('CancelReasons', [
            'foreignKey' => 'cancel_reason_id'
        ]);
        $this->belongsTo('FeedbackRequesters', [
            'foreignKey' => 'feedback_requester_id'
        ]);
        $this->belongsTo('RejectionCodes', [
            'foreignKey' => 'rejection_code_id'
        ]);
        $this->belongsTo('CreatedUsers', [
            'foreignKey' => 'created_user_id'
        ]);
        $this->belongsTo('UpdatedUsers', [
            'foreignKey' => 'updated_user_id'
        ]);
        $this->belongsTo('ParentLines', [
            'foreignKey' => 'parent_line_id'
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
            ->numeric('sorter')
            ->requirePresence('sorter', 'create')
            ->notEmpty('sorter');

        $validator
            ->requirePresence('line_no', 'create')
            ->notEmpty('line_no');

        $validator
            ->requirePresence('ordered_quantity', 'create')
            ->notEmpty('ordered_quantity');

        $validator
            ->allowEmpty('produced_quantity');

        $validator
            ->allowEmpty('requirements');

        $validator
            ->allowEmpty('customer_reference');

        $validator
            ->allowEmpty('fabric_reference_colour_name');

        $validator
            ->allowEmpty('measurement');

        $validator
            ->allowEmpty('final_shade_code');

        $validator
            ->allowEmpty('fce_comments');

        $validator
            ->dateTime('delivered_date')
            ->allowEmpty('delivered_date');

        $validator
            ->integer('disable_lrm')
            ->requirePresence('disable_lrm', 'create')
            ->notEmpty('disable_lrm');

        $validator
            ->integer('lrm_status')
            ->allowEmpty('lrm_status');

        $validator
            ->allowEmpty('sap_so_number');

        $validator
            ->allowEmpty('so_line_number');

        $validator
            ->allowEmpty('sap_po_number');

        $validator
            ->allowEmpty('sap_material');

        $validator
            ->allowEmpty('sap_shipment_number');

        $validator
            ->allowEmpty('sap_shipment_date');

        $validator
            ->integer('is_cancelled')
            ->requirePresence('is_cancelled', 'create')
            ->notEmpty('is_cancelled');

        $validator
            ->allowEmpty('cancel_reason_others');

        $validator
            ->integer('is_accepted')
            ->requirePresence('is_accepted', 'create')
            ->notEmpty('is_accepted');

        $validator
            ->allowEmpty('rejection_reason_others');

        $validator
            ->integer('is_rematch_required')
            ->requirePresence('is_rematch_required', 'create')
            ->notEmpty('is_rematch_required');

        $validator
            ->requirePresence('source', 'create')
            ->notEmpty('source');

        $validator
            ->dateTime('enrich_date')
            ->allowEmpty('enrich_date');

        $validator
            ->integer('auto_enrich')
            ->allowEmpty('auto_enrich');

        $validator
            ->allowEmpty('accepted_code');

        $validator
            ->uuid('ssma$rowid')
            ->requirePresence('ssma$rowid', 'create')
            ->notEmpty('ssma$rowid')
            ->add('ssma$rowid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->numeric('line_net_weight')
            ->allowEmpty('line_net_weight');

        $validator
            ->numeric('line_gross_weight')
            ->allowEmpty('line_gross_weight');

        $validator
            ->allowEmpty('carton_no');

        $validator
            ->integer('quantity_carton')
            ->allowEmpty('quantity_carton');

        $validator
            ->allowEmpty('message');

        $validator
            ->integer('is_direct_enrich')
            ->allowEmpty('is_direct_enrich');

        $validator
            ->integer('is_order_completed')
            ->allowEmpty('is_order_completed');

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
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['article_id'], 'Articles'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['mum_type_id'], 'MumTypes'));
        $rules->add($rules->existsIn(['order_type_id'], 'OrderTypes'));
        $rules->add($rules->existsIn(['request_type_id'], 'RequestTypes'));
        $rules->add($rules->existsIn(['scenario_id'], 'Scenarios'));
        $rules->add($rules->existsIn(['shade_id'], 'Shades'));
        $rules->add($rules->existsIn(['starting_shade_id'], 'StartingShades'));
        $rules->add($rules->existsIn(['fabric_id'], 'Fabrics'));
        $rules->add($rules->existsIn(['purpose_type_id'], 'PurposeTypes'));
        $rules->add($rules->existsIn(['delivery_plant_id'], 'DeliveryPlants'));
        $rules->add($rules->existsIn(['supply_plant_id'], 'SupplyPlants'));
        $rules->add($rules->existsIn(['final_shade_id'], 'FinalShades'));
        $rules->add($rules->existsIn(['sos_id'], 'Sos'));
        $rules->add($rules->existsIn(['stage_id'], 'Stages'));
        $rules->add($rules->existsIn(['sap_order_status_id'], 'SapOrderStatuses'));
        $rules->add($rules->existsIn(['cancel_reason_id'], 'CancelReasons'));
        $rules->add($rules->existsIn(['feedback_requester_id'], 'FeedbackRequesters'));
        $rules->add($rules->existsIn(['rejection_code_id'], 'RejectionCodes'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        $rules->add($rules->existsIn(['parent_line_id'], 'ParentLines'));
        return $rules;
    }
}
