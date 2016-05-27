<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SampleOrderLine Entity.
 *
 * @property int $id
 * @property float $sorter
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property int $line_no
 * @property int $article_id
 * @property \App\Model\Entity\Base\Article $article
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $mum_type_id
 * @property \App\Model\Entity\Base\MumType $mum_type
 * @property int $order_type_id
 * @property \App\Model\Entity\Base\OrderType $order_type
 * @property int $ordered_quantity
 * @property int $produced_quantity
 * @property int $request_type_id
 * @property \App\Model\Entity\Base\RequestType $request_type
 * @property string $requirements
 * @property string $customer_reference
 * @property string $fabric_reference_colour_name
 * @property int $scenario_id
 * @property \App\Model\Entity\Base\Scenario $scenario
 * @property int $shade_id
 * @property \App\Model\Entity\Base\Shade $shade
 * @property int $starting_shade_id
 * @property \App\Model\Entity\Base\StartingShade $starting_shade
 * @property string $measurement
 * @property string $fabric_id
 * @property \App\Model\Entity\Base\Fabric $fabric
 * @property int $purpose_type_id
 * @property \App\Model\Entity\Base\PurposeType $purpose_type
 * @property int $delivery_plant_id
 * @property \App\Model\Entity\Base\DeliveryPlant $delivery_plant
 * @property int $supply_plant_id
 * @property \App\Model\Entity\Base\SupplyPlant $supply_plant
 * @property int $final_shade_id
 * @property \App\Model\Entity\Base\FinalShade $final_shade
 * @property string $final_shade_code
 * @property string $fce_comments
 * @property int $sos_id
 * @property \App\Model\Entity\Base\So $so
 * @property int $stage_id
 * @property \App\Model\Entity\Base\Stage $stage
 * @property \Cake\I18n\Time $delivered_date
 * @property int $disable_lrm
 * @property int $lrm_status
 * @property int $sap_order_status_id
 * @property \App\Model\Entity\Base\SapOrderStatus $sap_order_status
 * @property string $sap_so_number
 * @property int $so_line_number
 * @property string $sap_po_number
 * @property string $sap_material
 * @property string $sap_shipment_number
 * @property string $sap_shipment_date
 * @property int $is_cancelled
 * @property int $cancel_reason_id
 * @property \App\Model\Entity\Base\CancelReason $cancel_reason
 * @property string $cancel_reason_others
 * @property int $feedback_requester_id
 * @property \App\Model\Entity\Base\FeedbackRequester $feedback_requester
 * @property int $is_accepted
 * @property int $rejection_code_id
 * @property \App\Model\Entity\Base\RejectionCode $rejection_code
 * @property string $rejection_reason_others
 * @property int $is_rematch_required
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property string $source
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property int $parent_line_id
 * @property \App\Model\Entity\Base\ParentLine $parent_line
 * @property \Cake\I18n\Time $enrich_date
 * @property int $auto_enrich
 * @property string $accepted_code
 * @property string $ssma$rowid
 * @property float $line_net_weight
 * @property float $line_gross_weight
 * @property string $carton_no
 * @property int $quantity_carton
 * @property string $message
 * @property int $is_direct_enrich
 * @property int $is_order_completed
 */
class SampleOrderLine extends CoatsEntity
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
