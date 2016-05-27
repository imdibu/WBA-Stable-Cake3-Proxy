<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ArosAco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArosAcos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Aros
 * @property \Cake\ORM\Association\BelongsTo $Acos
 */
class ArosAcosTable extends CoatsTable
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

        $this->table('coats_aros_acos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Aros', [
            'foreignKey' => 'aro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Acos', [
            'foreignKey' => 'aco_id',
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
            ->requirePresence('_create', 'create')
            ->notEmpty('_create');

        $validator
            ->requirePresence('_read', 'create')
            ->notEmpty('_read');

        $validator
            ->requirePresence('_update', 'create')
            ->notEmpty('_update');

        $validator
            ->requirePresence('_delete', 'create')
            ->notEmpty('_delete');

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
        $rules->add($rules->existsIn(['aro_id'], 'Aros'));
        $rules->add($rules->existsIn(['aco_id'], 'Acos'));
        return $rules;
    }
}
