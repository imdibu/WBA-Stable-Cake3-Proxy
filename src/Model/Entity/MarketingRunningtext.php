<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * MarketingRunningtext Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property string $runningtext
 * @property int $access_type_id
 * @property \App\Model\Entity\Base\AccessType $access_type
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property \Cake\I18n\Time $created
 * @property string $sales_org_name
 * @property \Cake\I18n\Time $available_from
 * @property \Cake\I18n\Time $available_to
 */
class MarketingRunningtext extends CoatsEntity
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
