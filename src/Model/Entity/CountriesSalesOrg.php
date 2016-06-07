<?php
namespace App\Model\Entity;



/**
 * CountriesSalesOrg Entity.
 *
 * @property int $country_id
 * @property \App\Model\Entity\Base\Country $country
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 */
class CountriesSalesOrg extends CoatsEntity
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
        'country_id' => false,
        'sales_org_id' => false,
    ];
}
