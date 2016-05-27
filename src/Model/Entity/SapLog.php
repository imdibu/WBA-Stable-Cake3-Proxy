<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SapLog Entity.
 *
 * @property int $id
 * @property string $type
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property string $order_no
 * @property int $order_line_id
 * @property \App\Model\Entity\Base\OrderLine $order_line
 * @property string $line_no
 * @property string $source
 * @property string $scenario
 * @property string $transaction_type
 * @property int $is_below_threshold
 * @property int $is_charged
 * @property int $is_forced_enrichment
 * @property string $request_content
 * @property string $response_code
 * @property string $response_content
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class SapLog extends CoatsEntity
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
