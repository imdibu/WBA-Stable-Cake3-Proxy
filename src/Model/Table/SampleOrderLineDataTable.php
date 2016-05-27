<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SampleOrderLineData;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleOrderLineData Model
 *
 * @property \Cake\ORM\Association\BelongsTo $OrderLines
 */
class SampleOrderLineDataTable extends CoatsTable
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

        $this->table('coats_sample_order_line_data');
        $this->displayField('order_line_id');
        $this->primaryKey('order_line_id');

        $this->belongsTo('OrderLines', [
            'foreignKey' => 'order_line_id',
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
            ->allowEmpty('article');

        $validator
            ->requirePresence('brand_name', 'create')
            ->notEmpty('brand_name');

        $validator
            ->requirePresence('ticket_name', 'create')
            ->notEmpty('ticket_name');

        $validator
            ->allowEmpty('shade_card_name');

        $validator
            ->allowEmpty('shade_card_code');

        $validator
            ->allowEmpty('shade_name');

        $validator
            ->allowEmpty('shade_code');

        $validator
            ->allowEmpty('standard_type');

        $validator
            ->allowEmpty('type_code');

        $validator
            ->requirePresence('purpose_type', 'create')
            ->notEmpty('purpose_type');

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
        $rules->add($rules->existsIn(['order_line_id'], 'OrderLines'));
        return $rules;
    }
}
