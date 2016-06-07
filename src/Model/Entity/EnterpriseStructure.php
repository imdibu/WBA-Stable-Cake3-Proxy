<?php
namespace App\Model\Entity;



/**
 * EnterpriseStructure Entity.
 *
 * @property int $id
 * @property int $region_id
 * @property \App\Model\Entity\Base\Region $region
 * @property int $country_id
 * @property \App\Model\Entity\Base\Country $country
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $hub_id
 * @property \App\Model\Entity\Base\Hub $hub
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class EnterpriseStructure extends CoatsEntity
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
