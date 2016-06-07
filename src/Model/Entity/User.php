<?php
namespace App\Model\Entity;



/**
 * User Entity.
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $first_name
 * @property string $last_name
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $user_type_id
 * @property \App\Model\Entity\Base\UserType $user_type
 * @property string $mobile
 * @property string $device_id
 * @property \App\Model\Entity\Base\Device $device
 * @property int $is_sms_allowed
 * @property int $is_sync_enabled
 * @property int $is_order_cancel_allowed
 * @property int $timezone_id
 * @property \App\Model\Entity\Base\Timezone $timezone
 * @property int $language_id
 * @property \App\Model\Entity\Base\Language $language
 * @property int $date_format_id
 * @property \App\Model\Entity\Base\DateFormat $date_format
 * @property int $time_format_id
 * @property \App\Model\Entity\Base\TimeFormat $time_format
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property int $is_release_notes
 * @property int $agree_terms_conditions
 * @property \Cake\I18n\Time $tc_acceptance_date
 * @property int $order_response_mail
 * @property int $ship_notice_mail
 * @property string $common_email
 * @property string $ship_to_party_id
 * @property \App\Model\Entity\Base\ShipToParty $ship_to_party
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property string $tokenhash
 * @property int $ship_notice_mail_cce
 * @property int $HX_Active
 * @property int $AX_Active
 * @property int $sample_upload
 * @property int $order_delay_alert
 * @property int $is_sftp_email_enabled
 */
class User extends CoatsEntity
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

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
