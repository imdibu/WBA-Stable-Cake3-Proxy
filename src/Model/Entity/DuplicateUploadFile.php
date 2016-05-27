<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * DuplicateUploadFile Entity.
 *
 * @property int $id
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $upload_file_name
 * @property \Cake\I18n\Time $upload_time
 * @property int $uploaded_by
 * @property string $error_message
 * @property int $source_type
 */
class DuplicateUploadFile extends CoatsEntity
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
