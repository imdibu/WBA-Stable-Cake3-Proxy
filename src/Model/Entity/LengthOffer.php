<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * LengthOffer Entity.
 *
 * @property int $id
 * @property int $plant_id
 * @property \App\Model\Entity\Base\Plant $plant
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $uom_id
 * @property \App\Model\Entity\Base\Uom $uom
 * @property int $measurement_standard_id
 * @property \App\Model\Entity\Base\MeasurementStandard $measurement_standard
 * @property int $cop_length_id
 * @property \App\Model\Entity\Base\CopLength $cop_length
 * @property int $cone_length_id
 * @property \App\Model\Entity\Base\ConeLength $cone_length
 * @property int $vicone_length_id
 * @property \App\Model\Entity\Base\ViconeLength $vicone_length
 * @property int $cop_length_id_old
 * @property int $cone_length_id_old
 * @property int $vicone_length_id_old
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class LengthOffer extends CoatsEntity
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
