<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * IntegrationSpecialCustomer Entity.
 *
 * @property int $id
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $customer_code
 * @property int $requester_id
 * @property \App\Model\Entity\Base\Requester $requester
 * @property string $ack_notice_path
 * @property string $ship_notice_path
 * @property string $type
 * @property int $active
 */
class IntegrationSpecialCustomer extends CoatsEntity
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
