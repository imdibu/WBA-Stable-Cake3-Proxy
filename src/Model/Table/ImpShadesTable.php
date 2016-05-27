<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ImpShade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImpShades Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ShadeCards
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 */
class ImpShadesTable extends CoatsTable
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

        $this->table('coats_imp_shades');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('ShadeCards', [
            'foreignKey' => 'shade_card_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
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
            ->requirePresence('shade_card_name', 'create')
            ->notEmpty('shade_card_name');

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
        return $rules;
    }
}
