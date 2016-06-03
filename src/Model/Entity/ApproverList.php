<?php
namespace App\Model\Entity;



/**
 * ApproverList Entity.
 *
 * @property int $id
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $requester_id
 * @property \App\Model\Entity\Base\Requester $requester
 * @property float $value_start
 * @property float $value_until
 * @property int $enable_email_notify
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 */
class ApproverList extends CoatsEntity
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
