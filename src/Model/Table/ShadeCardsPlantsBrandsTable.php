<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ShadeCardsPlantsBrand;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShadeCardsPlantsBrands Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ShadeCardPlants
 * @property \Cake\ORM\Association\BelongsTo $Brands
 */
class ShadeCardsPlantsBrandsTable extends CoatsTable
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

        $this->table('coats_shade_cards_plants_brands');
        $this->displayField('shade_card_plant_id');
        $this->primaryKey(['shade_card_plant_id', 'brand_id']);

        $this->belongsTo('ShadeCardPlants', [
            'foreignKey' => 'shade_card_plant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
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
        $rules->add($rules->existsIn(['shade_card_plant_id'], 'ShadeCardPlants'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        return $rules;
    }
}
