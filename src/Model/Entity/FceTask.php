<?php
namespace App\Model\Entity;



/**
 * FceTask Entity.
 *
 * @property int $id
 * @property int $order_line_id
 * @property \App\Model\Entity\Base\OrderLine $order_line
 * @property int $ship_to_party_id
 * @property \App\Model\Entity\Base\ShipToParty $ship_to_party
 * @property int $requester_id
 * @property \App\Model\Entity\Base\Requester $requester
 * @property int $task_mode_id
 * @property \App\Model\Entity\Base\TaskMode $task_mode
 * @property \Cake\I18n\Time $appointment_date
 * @property int $is_completed
 * @property \Cake\I18n\Time $completed
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class FceTask extends CoatsEntity
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
