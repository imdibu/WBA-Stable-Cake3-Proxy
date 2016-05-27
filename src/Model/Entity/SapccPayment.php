<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SapccPayment Entity.
 *
 * @property int $id
 * @property string $customer_code
 * @property string $sales_org_name
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $currency
 * @property string $overdue_after_30_days
 * @property string $overdue_after_60_days
 * @property string $overdue_after_90_days
 */
class SapccPayment extends CoatsEntity
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
