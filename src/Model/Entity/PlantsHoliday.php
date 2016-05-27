<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * PlantsHoliday Entity.
 *
 * @property int $id
 * @property int $plant_id
 * @property \App\Model\Entity\Base\Plant $plant
 * @property string $holiday_desc
 * @property \Cake\I18n\Time $holiday_date_from
 * @property \Cake\I18n\Time $holiday_date_to
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class PlantsHoliday extends CoatsEntity
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
        'id' => false,
    ];
}
