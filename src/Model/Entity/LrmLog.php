<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * LrmLog Entity.
 *
 * @property int $id
 * @property int $order_line_id
 * @property \App\Model\Entity\Base\OrderLine $order_line
 * @property string $order_no
 * @property string $line_no
 * @property int $delivery_plant_id
 * @property \App\Model\Entity\Base\DeliveryPlant $delivery_plant
 * @property int $supply_plant_id
 * @property \App\Model\Entity\Base\SupplyPlant $supply_plant
 * @property string $shade_name
 * @property string $shade_code
 * @property string $standard_type
 * @property string $type_code
 * @property string $transaction_type
 * @property string $request_content
 * @property int $is_success
 * @property string $response_text
 * @property string $response_content
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class LrmLog extends CoatsEntity
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
