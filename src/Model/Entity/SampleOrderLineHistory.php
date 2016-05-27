<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SampleOrderLineHistory Entity.
 *
 * @property int $id
 * @property int $order_line_id
 * @property \App\Model\Entity\Base\OrderLine $order_line
 * @property int $stage_id
 * @property \App\Model\Entity\Base\Stage $stage
 * @property \Cake\I18n\Time $cycle_time
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class SampleOrderLineHistory extends CoatsEntity
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
