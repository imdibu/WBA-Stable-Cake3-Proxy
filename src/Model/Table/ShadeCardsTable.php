<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ShadeCard;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShadeCards Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 * @property \Cake\ORM\Association\BelongsTo $UpdatedUsers
 */
class ShadeCardsTable extends CoatsTable
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

        $this->table('coats_shade_cards');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
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
            ->requirePresence('shade_card_name', 'create')
            ->notEmpty('shade_card_name')
            ->add('shade_card_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('shade_card_code', 'create')
            ->notEmpty('shade_card_code')
            ->add('shade_card_code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('shade_card_type')
            ->requirePresence('shade_card_type', 'create')
            ->notEmpty('shade_card_type');

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
        $rules->add($rules->isUnique(['shade_card_name']));
        $rules->add($rules->isUnique(['shade_card_code']));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['created_user_id'], 'CreatedUsers'));
        $rules->add($rules->existsIn(['updated_user_id'], 'UpdatedUsers'));
        return $rules;
    }
}
