<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * Shade Entity.
 *
 * @property int $id
 * @property int $shade_card_id
 * @property \App\Model\Entity\Base\ShadeCard $shade_card
 * @property string $shade_name
 * @property string $shade_code
 * @property int $color_ratio_r
 * @property int $color_ratio_g
 * @property int $color_ratio_b
 * @property string $standard_type
 * @property string $type_code
 * @property int $is_shade_in_use
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property int $is_duplicate
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property int $color_group
 * @property string $Core
 */
class Shade extends CoatsEntity
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
