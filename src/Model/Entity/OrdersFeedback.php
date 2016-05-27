<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * OrdersFeedback Entity.
 *
 * @property int $id
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property int $line_item_id
 * @property \App\Model\Entity\Base\LineItem $line_item
 * @property int $raised_by_id
 * @property \App\Model\Entity\Base\RaisedBy $raised_by
 * @property int $is_happy
 * @property int $rematch
 * @property int $rejection_id
 * @property \App\Model\Entity\Base\Rejection $rejection
 * @property string $rejection_reason_others
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class OrdersFeedback extends CoatsEntity
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
