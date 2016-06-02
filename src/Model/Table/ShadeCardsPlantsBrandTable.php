<?php
namespace App\Model\Table;

class ShadeCardsPlantsBrandTable extends CoatsTable
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
    }
}
