<?php
namespace App\Model\Entity;



/**
 * UsersCustomer Entity.
 *
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 */
class UsersCustomer extends CoatsEntity
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
        'customer_id' => false,
    ];
}
