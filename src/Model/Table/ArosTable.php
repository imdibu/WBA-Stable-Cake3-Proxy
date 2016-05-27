<?php
namespace App\Model\Table\Base;

use App\Model\Entity\Aro;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentAros
 * @property \Cake\ORM\Association\HasMany $ChildAros
 */
class ArosTable extends CoatsTable
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

        $this->table('coats_aros');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentAros', [
            'className' => 'Aros',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildAros', [
            'className' => 'Aros',
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
            ->allowEmpty('model');

        $validator
            ->allowEmpty('foreign_key');

        $validator
            ->allowEmpty('alias');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentAros'));
        return $rules;
    }
}
