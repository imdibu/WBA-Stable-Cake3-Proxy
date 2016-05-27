<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * ImpShade Entity.
 *
 * @property int $id
 * @property string $shade_card_name
 * @property int $shade_card_id
 * @property \App\Model\Entity\Base\ShadeCard $shade_card
 * @property string $shade_name
 * @property string $shade_code
 * @property int $color_ratio_r
 * @property int $color_ratio_g
 * @property int $color_ratio_b
 * @property string $standard_type
 * @property string $type_code
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 */
class ImpShade extends CoatsEntity
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
