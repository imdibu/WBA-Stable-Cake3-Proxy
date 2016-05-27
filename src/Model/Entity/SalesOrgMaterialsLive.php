<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SalesOrgMaterialsLive Entity.
 *
 * @property int $id
 * @property int $country_id
 * @property \App\Model\Entity\Base\Country $country
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $plant_id
 * @property \App\Model\Entity\Base\Plant $plant
 * @property string $article
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $mum_type_id
 * @property \App\Model\Entity\Base\MumType $mum_type
 * @property int $is_default
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 * @property string $length
 * @property string $finish
 * @property string $uom
 * @property string $type
 * @property string $to_remove
 */
class SalesOrgMaterialsLive extends CoatsEntity
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
