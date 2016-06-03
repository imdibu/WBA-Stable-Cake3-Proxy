<?php
namespace App\Model\Entity;



/**
 * SapccPurchase Entity.
 *
 * @property int $id
 * @property int $order_number
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $customer_code
 * @property string $customer_name
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property string $sales_org_name
 * @property int $sap_order_no
 * @property int $sap_order_line_no
 * @property string $order_type
 * @property string $po_number
 * @property string $payer_number
 * @property int $ship_to_party_id
 * @property \App\Model\Entity\Base\ShipToParty $ship_to_party
 * @property string $ship_to_party_name
 * @property string $ship_to_party_code
 * @property \Cake\I18n\Time $po_date
 * @property \Cake\I18n\Time $req_del_date
 * @property int $buyer_id
 * @property \App\Model\Entity\Base\Buyer $buyer
 * @property string $buyer_name
 * @property string $buyer_code
 * @property string $material
 * @property string $brand_name
 * @property string $ticket_name
 * @property string $length_name
 * @property string $finish_name
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $length_id
 * @property \App\Model\Entity\Base\Length $length
 * @property int $finish_id
 * @property \App\Model\Entity\Base\Finish $finish
 * @property int $shade_id
 * @property \App\Model\Entity\Base\Shade $shade
 * @property string $shade_code
 * @property int $purchase_quantity
 * @property string $uom
 * @property int $requester_id
 * @property \App\Model\Entity\Base\Requester $requester
 * @property string $requester_name
 * @property string $style
 * @property string $buyer_sales_orderno
 * @property string $prod_style_no
 * @property string $otherinfo
 * @property string $customer_material_no
 * @property int $delivered_qty
 * @property \Cake\I18n\Time $promised_date
 * @property \Cake\I18n\Time $cr_date
 * @property \Cake\I18n\Time $updated_date
 */
class SapccPurchase extends CoatsEntity
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
