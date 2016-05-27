<?php
namespace App\Model\Table\Base;

use App\Model\Entity\Shade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shades Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ShadeCards
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class ShadesTable extends CoatsTable
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

        $this->table('coats_shades');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ShadeCards', [
            'foreignKey' => 'shade_card_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
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
            ->requirePresence('shade_name', 'create')
            ->notEmpty('shade_name');

        $validator
            ->requirePresence('shade_code', 'create')
            ->notEmpty('shade_code');

        $validator
            ->integer('color_ratio_r')
            ->requirePresence('color_ratio_r', 'create')
            ->notEmpty('color_ratio_r');

        $validator
            ->integer('color_ratio_g')
            ->requirePresence('color_ratio_g', 'create')
            ->notEmpty('color_ratio_g');

        $validator
            ->integer('color_ratio_b')
            ->requirePresence('color_ratio_b', 'create')
            ->notEmpty('color_ratio_b');

        $validator
            ->requirePresence('standard_type', 'create')
            ->notEmpty('standard_type');

        $validator
            ->requirePresence('type_code', 'create')
            ->notEmpty('type_code');

        $validator
            ->integer('is_shade_in_use')
            ->requirePresence('is_shade_in_use', 'create')
            ->notEmpty('is_shade_in_use');

        $validator
            ->integer('is_duplicate')
            ->allowEmpty('is_duplicate');

        $validator
            ->integer('color_group')
            ->allowEmpty('color_group');

        $validator
            ->allowEmpty('Core');

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
        $rules->add($rules->existsIn(['shade_card_id'], 'ShadeCards'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
