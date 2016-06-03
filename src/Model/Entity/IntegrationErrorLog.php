<?php
namespace App\Model\Entity;



/**
 * IntegrationErrorLog Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $file_name
 * @property int $source_type
 * @property string $error_message
 * @property int $uploaded_by
 * @property \Cake\I18n\Time $failed_time
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property int $line_id
 * @property \App\Model\Entity\Base\Line $line
 * @property string $requestor_first_name
 * @property string $requestor_last_name
 * @property string $requestor_email
 * @property string $customer_name
 * @property string $downloadfilename
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property string $cust_foldername
 * @property int $is_deleted
 * @property int $new_sftp_server
 */
class IntegrationErrorLog extends CoatsEntity
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
