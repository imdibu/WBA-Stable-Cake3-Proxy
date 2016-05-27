<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * RequestorBusinessprincipal Entity.
 *
 * @property int $id
 * @property string $user_email
 * @property int $buyer_id
 * @property \App\Model\Entity\Base\Buyer $buyer
 * @property string $business_principal_no
 */
class RequestorBusinessprincipal extends CoatsEntity
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
