<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * Audit Entity.
 *
 * @property int $id
 * @property string $table_name
 * @property string $action
 * @property int $record
 * @property string $field_name
 * @property string $old_value
 * @property string $new_value
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 * @property \Cake\I18n\Time $updated
 */
class Audit extends CoatsEntity
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
