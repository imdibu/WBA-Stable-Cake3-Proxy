<?php
namespace App\Model\Entity;



/**
 * BusinessPrincipal Entity.
 *
 * @property int $id
 * @property string $business_principal_name
 * @property string $business_principal_no
 * @property int $light_source_1st_id
 * @property \App\Model\Entity\Base\LightSource1st $light_source1st
 * @property int $light_source_2nd_id
 * @property \App\Model\Entity\Base\LightSource2nd $light_source2nd
 * @property int $light_source_3rd_id
 * @property \App\Model\Entity\Base\LightSource3rd $light_source3rd
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class BusinessPrincipal extends CoatsEntity
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
