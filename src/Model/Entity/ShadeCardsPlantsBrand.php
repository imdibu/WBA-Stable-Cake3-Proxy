<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * ShadeCardsPlantsBrand Entity.
 *
 * @property int $shade_card_plant_id
 * @property \App\Model\Entity\Base\ShadeCardPlant $shade_card_plant
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 */
class ShadeCardsPlantsBrand extends CoatsEntity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'shade_card_plant_id' => false,
        'brand_id' => false,
    ];
}
