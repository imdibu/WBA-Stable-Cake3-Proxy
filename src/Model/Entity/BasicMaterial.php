<?php
namespace App\Model\Entity;



/**
 * BasicMaterial Entity.
 *
 * @property int $id
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $material_group_id
 * @property \App\Model\Entity\Base\MaterialGroup $material_group
 * @property int $product_hierarchy_id
 * @property \App\Model\Entity\Base\ProductHierarchy $product_hierarchy
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class BasicMaterial extends CoatsEntity
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
