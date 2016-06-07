<?php
namespace App\Model\Entity;

/**
 * BulkOrder Entity.
 *
 * @property int $id
 * @property int $source_id
 * @property \App\Model\Entity\Base\Source $source
 * @property string $order_no
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $requester_id
 * @property \App\Model\Entity\Base\Requester $requester
 * @property int $ship_to_party_id
 * @property \App\Model\Entity\Base\ShipToParty $ship_to_party
 * @property int $buyer_id
 * @property \App\Model\Entity\Base\Buyer $buyer
 * @property string $comments
 * @property string $po_number
 * @property string $surcharge_value
 * @property string $discount_value
 * @property string $net_value
 * @property string $currency
 * @property int $delivery_mode_id
 * @property \App\Model\Entity\Base\DeliveryMode $delivery_mode
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property \Cake\I18n\Time $shipment_date
 * @property string $shipment_number
 * @property string $so_number
 * @property string $style
 * @property string $buyer_sales_orderno
 * @property int $requester_dn
 * @property int $requester_invoice
 * @property int $style_dn
 * @property int $style_invoice
 * @property int $buyer_sales_orderno_dn
 * @property int $buyer_sales_orderno_invoice
 * @property int $warehouse_instruction
 * @property int $upload_file_id
 * @property \App\Model\Entity\Base\UploadFile $upload_file
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property int $line_info_invoice
 * @property int $line_info_dn
 * @property int $customer_service_executive_id
 * @property \App\Model\Entity\Base\CustomerServiceExecutive $customer_service_executive
 * @property \Cake\I18n\Time $Updatedtime
 * @property int $approve_workflow
 * @property int $order_line
 * @property string $ssma$rowid
 * @property int $payer_id
 * @property \App\Model\Entity\Base\Payer $payer
 * @property int $sub_status
 * @property int $FailedToSendSAP
 * @property string $contract_po_number
 * @property int $buying_house_id
 * @property \App\Model\Entity\Base\BuyingHouse $buying_house
 * @property int $contract_customer
 */
class BulkOrder extends CoatsEntity
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
