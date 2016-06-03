<?php
namespace App\Model\Entity;



/**
 * ApprovalOrderHistory Entity.
 *
 * @property int $id
 * @property string $bulk_order_no
 * @property int $bulk_order_id
 * @property \App\Model\Entity\Base\BulkOrder $bulk_order
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property int $approver_id
 * @property \App\Model\Entity\Base\Approver $approver
 * @property \Cake\I18n\Time $approve_time
 * @property int $source_id
 * @property \App\Model\Entity\Base\Source $source
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $total_value
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property string $reason
 */
class ApprovalOrderHistory extends CoatsEntity
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
