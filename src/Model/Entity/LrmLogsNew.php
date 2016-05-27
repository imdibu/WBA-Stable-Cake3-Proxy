<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * LrmLogsNew Entity.
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
class LrmLogsNew extends CoatsEntity
{

}
