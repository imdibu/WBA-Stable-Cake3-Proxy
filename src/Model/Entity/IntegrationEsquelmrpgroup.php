<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * IntegrationEsquelmrpgroup Entity.
 *
 * @property int $id
 * @property string $mrpgroup
 * @property string $customer_code
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $sales_org
 * @property string $uploaderid
 * @property int $status
 * @property string $template
 * @property string $customer_in_uploadfile
 */
class IntegrationEsquelmrpgroup extends CoatsEntity
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
