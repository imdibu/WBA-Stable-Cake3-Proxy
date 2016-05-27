<?php
namespace App\Model\Table\Base;

use App\Model\Entity\Aco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AccessTypes
 * @property \Cake\ORM\Association\BelongsTo $ParentAcos
 * @property \Cake\ORM\Association\HasMany $ChildAcos
 */
class AcosTable extends CoatsTable
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

        $this->table('coats_acos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('AccessTypes', [
            'foreignKey' => 'access_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentAcos', [
            'className' => 'Acos',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildAcos', [
            'className' => 'Acos',
            'foreignKey' => 'parent_id'
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
            ->integer('menu_seq')
            ->allowEmpty('menu_seq');

        $validator
            ->allowEmpty('model');

        $validator
            ->allowEmpty('foreign_key');

        $validator
            ->allowEmpty('alias');

        $validator
            ->requirePresence('label', 'create')
            ->notEmpty('label');

        $validator
            ->integer('is_header')
            ->requirePresence('is_header', 'create')
            ->notEmpty('is_header');

        $validator
            ->integer('_create')
            ->requirePresence('_create', 'create')
            ->notEmpty('_create');

        $validator
            ->integer('_update')
            ->requirePresence('_update', 'create')
            ->notEmpty('_update');

        $validator
            ->integer('_delete')
            ->requirePresence('_delete', 'create')
            ->notEmpty('_delete');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->integer('grp')
            ->requirePresence('grp', 'create')
            ->notEmpty('grp');

        $validator
            ->integer('seq')
            ->requirePresence('seq', 'create')
            ->notEmpty('seq');

        $validator
            ->integer('lft')
            ->allowEmpty('lft');

        $validator
            ->integer('rght')
            ->allowEmpty('rght');

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
        $rules->add($rules->existsIn(['access_type_id'], 'AccessTypes'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentAcos'));
        return $rules;
    }
}
