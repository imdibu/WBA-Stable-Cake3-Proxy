<?php
namespace App\Model\Entity;



/**
 * StaticCountry Entity.
 *
 * @property int $id
 * @property string $country_name
 * @property string $country_code
 */
class StaticCountry extends CoatsEntity
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
