<?php
namespace App\Model\Table\Base;

use App\Model\Entity\PlantsWeekend;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlantsWeekends Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Plants
 * @property \Cake\ORM\Association\BelongsTo $Weekends
 */
class PlantsWeekendsTable extends CoatsTable
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

        $this->table('coats_plants_weekends');
        $this->displayField('plant_id');
        $this->primaryKey(['plant_id', 'weekend_id']);

        $this->belongsTo('Plants', [
            'foreignKey' => 'plant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Weekends', [
            'foreignKey' => 'weekend_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['weekend_id'], 'Weekends'));
        return $rules;
    }
}
