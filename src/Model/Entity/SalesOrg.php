<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SalesOrg Entity.
 *
 * @property int $id
 * @property string $sales_org_name
 * @property string $description
 * @property int $is_sap_instance_enabled
 * @property string $sap_instance
 * @property int $is_charged
 * @property int $is_forced_enrichment
 * @property int $exclude_from_dye_lot
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property string $product_availability_check
 * @property string $force_re_agree
 * @property string $privacy_policy_content
 * @property string $enabled_tnc
 * @property int $allow_to_print_dn_invoice
 * @property string $coats_user_emails
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property int $ccefreetypes_id
 * @property \App\Model\Entity\Base\Ccefreetype $ccefreetype
 * @property int $ccechargedtypes_id
 * @property \App\Model\Entity\Base\Ccechargedtype $ccechargedtype
 * @property int $ecomtypes_id
 * @property \App\Model\Entity\Base\Ecomtype $ecomtype
 * @property int $add_line_info_line
 * @property int $division
 * @property string $distribution
 * @property string $address_line1
 * @property string $address_line2
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $company_name
 * @property string $enabled_poprint
 * @property int $sales_approval_workflow
 * @property int $enabled_runningtext
 * @property int $is_payer_enabled
 * @property int $is_cceshipnotice_enabled
 * @property int $enable_live_link
 * @property string $default_language_id
 * @property \App\Model\Entity\Base\DefaultLanguage $default_language
 * @property string $default_region_id
 * @property \App\Model\Entity\Base\DefaultRegion $default_region
 * @property string $live_link_service_id
 * @property \App\Model\Entity\Base\LiveLinkService $live_link_service
 * @property int $enabled_orders_without_shade
 * @property int $enable_customer_price
 * @property int $off_order
 * @property int $pop_up_id
 * @property \App\Model\Entity\Base\PopUp $pop_up
 * @property int $combined_order
 * @property int $cce_priority
 * @property int $enable_buying_house
 * @property int $enable_required_date_logic
 * @property int $timezone_id
 * @property \App\Model\Entity\Base\Timezone $timezone
 * @property string $close_time
 * @property int $partial_stock_check
 * @property int $forward_order_days_check
 * @property string $forward_order_days
 * @property string $vee24_site_name
 * @property string $terms_and_conditions_content
 * @property int $sample_upload_active
 * @property int $auto_enrich_options
 * @property int $shipping_condition_id
 * @property \App\Model\Entity\Base\ShippingCondition $shipping_condition
 */
class SalesOrg extends CoatsEntity
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
