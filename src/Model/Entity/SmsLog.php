<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SmsLog Entity.
 *
 * @property int $id
 * @property string $transaction_type
 * @property int $sms_id
 * @property \App\Model\Entity\Base\Sm $sm
 * @property string $api
 * @property string $url
 * @property int $user_id
 * @property \App\Model\Entity\Base\User $user
 * @property string $from_mobile
 * @property string $to_mobile
 * @property string $content
 * @property string $response_code
 * @property string $response_text
 * @property string $raw_data
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class SmsLog extends CoatsEntity
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
