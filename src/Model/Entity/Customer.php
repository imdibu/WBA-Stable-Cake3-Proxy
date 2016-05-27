<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * Customer Entity.
 *
 * @property int $id
 * @property string $customer_name
 * @property string $customer_code
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $delivery_plant_id
 * @property \App\Model\Entity\Base\DeliveryPlant $delivery_plant
 * @property int $no_of_options
 * @property int $is_duplicate
 * @property int $cce_solution_id
 * @property \App\Model\Entity\Base\CceSolution $cce_solution
 * @property int $priority_id
 * @property \App\Model\Entity\Base\Priority $priority
 * @property int $access_type_id
 * @property \App\Model\Entity\Base\AccessType $access_type
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property int $ship_notice_id
 * @property \App\Model\Entity\Base\ShipNotice $ship_notice
 * @property int $customer_service_executive_id
 * @property \App\Model\Entity\Base\CustomerServiceExecutive $customer_service_executive
 * @property string $common_email
 * @property string $comments
 * @property int $delivery_mode_id
 * @property \App\Model\Entity\Base\DeliveryMode $delivery_mode
 * @property int $exclude_delivery_mode_display
 * @property int $exclude_from_dye_lot
 * @property string $length_of_material_no
 * @property string $position_of_brand
 * @property string $position_of_ticket
 * @property string $position_of_length
 * @property string $position_of_finish
 * @property string $position_of_shade
 * @property int $use_coats_option
 * @property int $product_availability_check
 * @property int $allow_to_send_WH_instruction
 * @property int $ccefreeordertypes_id
 * @property \App\Model\Entity\Base\Ccefreeordertype $ccefreeordertype
 * @property int $ccechargedordertypes_id
 * @property \App\Model\Entity\Base\Ccechargedordertype $ccechargedordertype
 * @property int $ecomordertypes_id
 * @property \App\Model\Entity\Base\Ecomordertype $ecomordertype
 * @property int $cust_add_header_info_header
 * @property int $printreqheaders_id
 * @property \App\Model\Entity\Base\Printreqheader $printreqheader
 * @property int $printstyleheaders_id
 * @property \App\Model\Entity\Base\Printstyleheader $printstyleheader
 * @property int $printbuyerheaders_id
 * @property \App\Model\Entity\Base\Printbuyerheader $printbuyerheader
 * @property int $cust_add_line_info_line
 * @property int $print_line_info
 * @property int $cust_mdq_enabled
 * @property string $division
 * @property string $distribution_channel
 * @property int $approval_workflow
 * @property string $IS_CAPABLE_OF_CAD_DESIGN_ORDER
 * @property string $IS_CAPABLE_FOR_3D_PRINT_ORDER
 * @property string $IS_CAPABLE_OF_PROTOPUL_ORDER
 * @property string $IS_CAPABLE_OF_MOULD_ORDER
 * @property int $payer_enabled
 * @property int $enable_live_link
 * @property int $allow_clean_failed_files
 * @property int $Status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property int $cus_orders_without_shade
 * @property int $HX_Active
 * @property int $AX_Active
 * @property int $off_order
 * @property int $off_order_type
 * @property int $popup_id
 * @property \App\Model\Entity\Base\Popup $popup
 * @property int $combined_order
 * @property int $new_sftp_server
 * @property int $cce_priority
 * @property int $enable_tnc
 * @property int $auto_enrich_options
 * @property int $auto_enrich_stock_id
 * @property \App\Model\Entity\Base\AutoEnrichStock $auto_enrich_stock
 * @property int $shipping_condition_id
 * @property \App\Model\Entity\Base\ShippingCondition $shipping_condition
 */
class Customer extends CoatsEntity
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
