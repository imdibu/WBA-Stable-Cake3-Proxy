<?php
namespace App\Model\Entity;
/**
 * BulkOrderLine Entity.
 *
 * @property int $id
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property int $line_no
 * @property string $customer_material_no
 * @property int $article_id
 * @property \App\Model\Entity\Base\Article $article
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
 * @property string $coats_material_no
 * @property int $ordered_quantity
 * @property int $adjusted_quantity
 * @property int $produced_quantity
 * @property int $so_line_number
 * @property \Cake\I18n\Time $shipment_date
 * @property string $shipment_number
 * @property string $unit_of_measure
 * @property string $price
 * @property string $message
 * @property \Cake\I18n\Time $required_date
 * @property \Cake\I18n\Time $estimated_delivery_date
 * @property int $estimated_delivery_quantity
 * @property int $delivery_mode_id
 * @property \App\Model\Entity\Base\DeliveryMode $delivery_mode
 * @property string $courier_company_name
 * @property string $courier_reference_number
 * @property \Cake\I18n\Time $courier_dispatch_date
 * @property \Cake\I18n\Time $courier_delivery_date
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property string $prod_style_no
 * @property string $otherinfo
 * @property string $adj_qty_changed
 * @property string $ssma$rowid
 * @property float $line_net_weight
 * @property float $line_gross_weight
 * @property string $carton_no
 * @property int $quantity_carton
 * @property string $shade_comments
 * @property float $customer_price
 * @property string $contract
 * @property string $line_reference
 * @property string $contract_customer_po
 */
class BulkOrderLine extends CoatsEntity
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
