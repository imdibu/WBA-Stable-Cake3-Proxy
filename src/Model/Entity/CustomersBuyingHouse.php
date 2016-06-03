<?php
namespace App\Model\Entity;



/**
 * CustomersBuyingHouse Entity.
 *
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $buying_house_id
 * @property \App\Model\Entity\Base\BuyingHouse $buying_house
 */
class CustomersBuyingHouse extends CoatsEntity
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
        'buying_house_id' => false,
    ];
}
