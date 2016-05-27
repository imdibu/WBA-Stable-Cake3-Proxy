<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SalesOrgsPlant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesOrgsPlants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Plants
 */
class SalesOrgsPlantsTable extends CoatsTable
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

        $this->table('coats_sales_orgs_plants');
        $this->displayField('sales_org_id');
        $this->primaryKey(['sales_org_id', 'plant_id']);

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plants', [
            'foreignKey' => 'plant_id',
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
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        $rules->add($rules->existsIn(['plant_id'], 'Plants'));
        return $rules;
    }
}
