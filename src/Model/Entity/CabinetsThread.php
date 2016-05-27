<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * CabinetsThread Entity.
 *
 * @property int $id
 * @property int $cabinet_id
 * @property \App\Model\Entity\Base\Cabinet $cabinet
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $shade_id
 * @property \App\Model\Entity\Base\Shade $shade
 * @property int $mum_type_id
 * @property \App\Model\Entity\Base\MumType $mum_type
 * @property int $quantity
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class CabinetsThread extends CoatsEntity
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
