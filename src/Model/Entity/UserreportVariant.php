<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * UserreportVariant Entity.
 *
 * @property int $id
 * @property string $variant_name
 * @property string $variant
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 */
class UserreportVariant extends CoatsEntity
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
