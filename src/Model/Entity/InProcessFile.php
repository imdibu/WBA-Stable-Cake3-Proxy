<?php
namespace App\Model\Entity;



/**
 * InprocessFile Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $file_name
 * @property string $is_inprocess
 * @property int $uploaded_by
 * @property \Cake\I18n\Time $uploaded_time
 * @property string $uploadedby_name
 * @property string $customer_name
 * @property string $downloadfilename
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 */
class InprocessFile extends CoatsEntity
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
