<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * RejectionReason Entity.
 *
 * @property int $id
 * @property int $rejection_code_id
 * @property \App\Model\Entity\Base\RejectionCode $rejection_code
 * @property int $language_id
 * @property \App\Model\Entity\Base\Language $language
 * @property string $rejection_reason
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class RejectionReason extends CoatsEntity
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
