<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * Aco Entity.
 *
 * @property int $id
 * @property int $access_type_id
 * @property \App\Model\Entity\Base\AccessType $access_type
 * @property int $parent_id
 * @property \App\Model\Entity\Base\ParentAco $parent_aco
 * @property int $menu_seq
 * @property string $model
 * @property int $foreign_key
 * @property string $alias
 * @property string $label
 * @property int $is_header
 * @property int $_create
 * @property int $_update
 * @property int $_delete
 * @property string $link
 * @property int $grp
 * @property int $seq
 * @property int $lft
 * @property int $rght
 * @property \App\Model\Entity\Base\ChildAco[] $child_acos
 */
class Aco extends CoatsEntity
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
