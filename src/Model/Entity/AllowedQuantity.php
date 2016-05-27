<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * AllowedQuantity Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $shade_id
 * @property \App\Model\Entity\Base\Shade $shade
 * @property int $mum_type_id
 * @property \App\Model\Entity\Base\MumType $mum_type
 * @property int $quantity
 */
class AllowedQuantity extends CoatsEntity
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
