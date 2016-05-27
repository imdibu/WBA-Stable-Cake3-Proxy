<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * LanguageLiveLink Entity.
 *
 * @property int $id
 * @property string $lang_live_name
 * @property string $lang_live_code
 */
class LanguageLiveLink extends CoatsEntity
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
