<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * IntegrationHeaderMapping Entity.
 *
 * @property int $id
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $status
 * @property string $bulkorder_sales_org_id
 * @property \App\Model\Entity\Base\BulkorderSalesOrg $bulkorder_sales_org
 * @property string $bulkorder_ship_to_party_id
 * @property \App\Model\Entity\Base\BulkorderShipToParty $bulkorder_ship_to_party
 * @property string $bulkorder_customer_id
 * @property \App\Model\Entity\Base\BulkorderCustomer $bulkorder_customer
 * @property string $bulkorderline_customer_material_no
 * @property string $bulkorderline_article_id
 * @property \App\Model\Entity\Base\BulkorderlineArticle $bulkorderline_article
 * @property string $bulkorderline_brand_id
 * @property \App\Model\Entity\Base\BulkorderlineBrand $bulkorderline_brand
 * @property string $bulkorderline_ticket_id
 * @property \App\Model\Entity\Base\BulkorderlineTicket $bulkorderline_ticket
 * @property string $bulkorderline_length_id
 * @property \App\Model\Entity\Base\BulkorderlineLength $bulkorderline_length
 * @property string $bulkorderline_finish_id
 * @property \App\Model\Entity\Base\BulkorderlineFinish $bulkorderline_finish
 * @property string $bulkorder_buyer_id
 * @property \App\Model\Entity\Base\BulkorderBuyer $bulkorder_buyer
 * @property string $bulkorderline_shade_id
 * @property \App\Model\Entity\Base\BulkorderlineShade $bulkorderline_shade
 * @property string $bulkorder_po_number
 * @property string $bulkorderline_required_date
 * @property string $bulkorder_requester_id
 * @property \App\Model\Entity\Base\BulkorderRequester $bulkorder_requester
 * @property string $bulkorderline_ordered_quantity
 * @property string $bulkorder_warehouse_instruction
 * @property string $bulkorder_style
 * @property string $bulkorder_buyer_sales_orderno
 * @property string $bulkorderline_prod_style_no
 * @property string $bulkorderline_otherinfo
 * @property string $customer_dateformat
 * @property string $php_equivalent_dateformat
 * @property string $buyer
 * @property string $bulkorder_payer_id
 * @property \App\Model\Entity\Base\BulkorderPayer $bulkorder_payer
 * @property string $delimeter_char
 * @property string $mappingprocesstype
 * @property string $bulkorderline_customer_price
 * @property string $bulkorderline_contract
 * @property string $bulkorderline_line_reference
 * @property string $bulkorder_buying_house_id
 * @property \App\Model\Entity\Base\BulkorderBuyingHouse $bulkorder_buying_house
 * @property string $bulkorderline_combinedarticleshade
 * @property string $bulkorder_contract_customer
 */
class IntegrationHeaderMapping extends CoatsEntity
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
