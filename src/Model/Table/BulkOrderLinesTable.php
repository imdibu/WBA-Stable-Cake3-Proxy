<?php
namespace App\Model\Table\Base;

use App\Model\Entity\BulkOrderLine;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BulkOrderLines Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $Articles
 * @property \Cake\ORM\Association\BelongsTo $Brands
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $Lengths
 * @property \Cake\ORM\Association\BelongsTo $Finishes
 * @property \Cake\ORM\Association\BelongsTo $Shades
 * @property \Cake\ORM\Association\BelongsTo $DeliveryModes
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class BulkOrderLinesTable extends CoatsTable
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

        $this->table('coats_bulk_order_lines');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id'
        ]);
        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id'
        ]);
        $this->belongsTo('Lengths', [
            'foreignKey' => 'length_id'
        ]);
        $this->belongsTo('Finishes', [
            'foreignKey' => 'finish_id'
        ]);
        $this->belongsTo('Shades', [
            'foreignKey' => 'shade_id'
        ]);
        $this->belongsTo('DeliveryModes', [
            'foreignKey' => 'delivery_mode_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id'
        ]);
        $this->belongsTo('UpdatedUsers', [
            'foreignKey' => 'updated_user_id'
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
            ->integer('line_no')
            ->requirePresence('line_no', 'create')
            ->notEmpty('line_no');

        $validator
            ->requirePresence('customer_material_no', 'create')
            ->notEmpty('customer_material_no');

        $validator
            ->allowEmpty('coats_material_no');

        $validator
            ->allowEmpty('ordered_quantity');

        $validator
            ->allowEmpty('adjusted_quantity');

        $validator
            ->requirePresence('produced_quantity', 'create')
            ->notEmpty('produced_quantity');

        $validator
            ->allowEmpty('so_line_number');

        $validator
            ->date('shipment_date')
            ->allowEmpty('shipment_date');

        $validator
            ->requirePresence('shipment_number', 'create')
            ->notEmpty('shipment_number');

        $validator
            ->requirePresence('unit_of_measure', 'create')
            ->notEmpty('unit_of_measure');

        $validator
            ->allowEmpty('price');

        $validator
            ->allowEmpty('message');

        $validator
            ->date('required_date')
            ->allowEmpty('required_date');

        $validator
            ->date('estimated_delivery_date')
            ->allowEmpty('estimated_delivery_date');

        $validator
            ->requirePresence('estimated_delivery_quantity', 'create')
            ->notEmpty('estimated_delivery_quantity');

        $validator
            ->requirePresence('courier_company_name', 'create')
            ->notEmpty('courier_company_name');

        $validator
            ->requirePresence('courier_reference_number', 'create')
            ->notEmpty('courier_reference_number');

        $validator
            ->dateTime('courier_dispatch_date')
            ->allowEmpty('courier_dispatch_date');

        $validator
            ->dateTime('courier_delivery_date')
            ->allowEmpty('courier_delivery_date');

        $validator
            ->requirePresence('prod_style_no', 'create')
            ->notEmpty('prod_style_no');

        $validator
            ->requirePresence('otherinfo', 'create')
            ->notEmpty('otherinfo');

        $validator
            ->allowEmpty('adj_qty_changed');

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
            ->allowEmpty('shade_comments');

        $validator
            ->numeric('customer_price')
            ->allowEmpty('customer_price');

        $validator
            ->allowEmpty('contract');

        $validator
            ->allowEmpty('line_reference');

        $validator
            ->allowEmpty('contract_customer_po');

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
        $rules->add($rules->existsIn(['length_id'], 'Lengths'));
        $rules->add($rules->existsIn(['finish_id'], 'Finishes'));
        $rules->add($rules->existsIn(['shade_id'], 'Shades'));
        $rules->add($rules->existsIn(['delivery_mode_id'], 'DeliveryModes'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
