<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * CustomersBusinessPrincipal Entity.
 *
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $business_principal_id
 * @property \App\Model\Entity\Base\BusinessPrincipal $business_principal
 */
class CustomersBusinessPrincipal extends CoatsEntity
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
        'customer_id' => false,
        'business_principal_id' => false,
    ];
}
