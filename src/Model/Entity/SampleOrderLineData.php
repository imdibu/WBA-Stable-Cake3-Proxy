<?php
namespace App\Model\Entity;



/**
 * SampleOrderLineData Entity.
 *
 * @property int $order_line_id
 * @property \App\Model\Entity\Base\OrderLine $order_line
 * @property string $article
 * @property string $brand_name
 * @property string $ticket_name
 * @property string $shade_card_name
 * @property string $shade_card_code
 * @property string $shade_name
 * @property string $shade_code
 * @property string $standard_type
 * @property string $type_code
 * @property string $purpose_type
 */
class SampleOrderLineData extends CoatsEntity
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
        'order_line_id' => false,
    ];
}
