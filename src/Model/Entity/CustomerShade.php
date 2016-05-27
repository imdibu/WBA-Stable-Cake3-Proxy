<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * CustomerShade Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $customer_shade_name
 * @property int $shade_id
 * @property \App\Model\Entity\Base\Shade $shade
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class CustomerShade extends CoatsEntity
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
