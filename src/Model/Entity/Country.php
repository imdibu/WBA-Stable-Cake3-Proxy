<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * Country Entity.
 *
 * @property int $id
 * @property int $region_id
 * @property \App\Model\Entity\Base\Region $region
 * @property string $country_name
 * @property string $country_code
 * @property int $language_id
 * @property \App\Model\Entity\Base\Language $language
 * @property int $timezone_id
 * @property \App\Model\Entity\Base\Timezone $timezone
 * @property int $date_format_id
 * @property \App\Model\Entity\Base\DateFormat $date_format
 * @property int $time_format_id
 * @property \App\Model\Entity\Base\TimeFormat $time_format
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class Country extends CoatsEntity
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
