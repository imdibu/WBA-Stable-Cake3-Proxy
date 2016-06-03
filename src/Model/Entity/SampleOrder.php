<?php
namespace App\Model\Entity;



/**
 * SampleOrder Entity.
 *
 * @property int $id
 * @property string $order_no
 * @property int $rematch_seq
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $ship_to_party_id
 * @property \App\Model\Entity\Base\ShipToParty $ship_to_party
 * @property int $requester_id
 * @property \App\Model\Entity\Base\Requester $requester
 * @property \Cake\I18n\Time $requested_edc
 * @property int $business_principal_id
 * @property \App\Model\Entity\Base\BusinessPrincipal $business_principal
 * @property int $ls_primary_id
 * @property \App\Model\Entity\Base\LsPrimary $ls_primary
 * @property int $ls_secondary_id
 * @property \App\Model\Entity\Base\LsSecondary $ls_secondary
 * @property int $ls_third_id
 * @property \App\Model\Entity\Base\LsThird $ls_third
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property int $hub_id
 * @property \App\Model\Entity\Base\Hub $hub
 * @property int $country_id
 * @property \App\Model\Entity\Base\Country $country
 * @property int $region_id
 * @property \App\Model\Entity\Base\Region $region
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $fce_id
 * @property \App\Model\Entity\Base\Fce $fce
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property string $ssma$rowid
 * @property int $payer_id
 * @property \App\Model\Entity\Base\Payer $payer
 * @property int $buying_house_id
 * @property \App\Model\Entity\Base\BuyingHouse $buying_house
 * @property int $source_id
 * @property \App\Model\Entity\Base\Source $source
 * @property int $upload_file_id
 * @property \App\Model\Entity\Base\UploadFile $upload_file
 */
class SampleOrder extends CoatsEntity
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
