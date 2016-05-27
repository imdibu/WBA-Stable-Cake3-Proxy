<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * PlantsWeekend Entity.
 *
 * @property int $plant_id
 * @property \App\Model\Entity\Base\Plant $plant
 * @property int $weekend_id
 * @property \App\Model\Entity\Base\Weekend $weekend
 */
class PlantsWeekend extends CoatsEntity
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
        'plant_id' => false,
        'weekend_id' => false,
    ];
}
