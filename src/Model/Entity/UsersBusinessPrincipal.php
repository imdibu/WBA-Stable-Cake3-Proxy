<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * UsersBusinessPrincipal Entity.
 *
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 * @property int $business_principal_id
 * @property \App\Model\Entity\Base\BusinessPrincipal $business_principal
 */
class UsersBusinessPrincipal extends CoatsEntity
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
        'user_id' => false,
        'business_principal_id' => false,
    ];
}
