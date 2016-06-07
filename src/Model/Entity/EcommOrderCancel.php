<?php
namespace App\Model\Entity;



/**
 * EcommOrderCancel Entity.
 *
 * @property int $id
 * @property string $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property string $reason
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 */
class EcommOrderCancel extends CoatsEntity
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
