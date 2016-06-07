<?php
namespace App\Model\Entity;



/**
 * ShipToParty Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $fce_id
 * @property \App\Model\Entity\Base\Fce $fce
 * @property string $ship_to_party_no
 * @property string $ship_to_party_name
 * @property string $address_line1
 * @property string $address_line2
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property int $country_id
 * @property \App\Model\Entity\Base\Country $country
 * @property int $hub_id
 * @property \App\Model\Entity\Base\Hub $hub
 * @property int $direct_distribution
 * @property string $latitude
 * @property string $longitude
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class ShipToParty extends CoatsEntity
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
