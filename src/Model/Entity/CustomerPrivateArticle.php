<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * CustomerPrivateArticle Entity.
 *
 * @property int $id
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property int $article_id
 * @property \App\Model\Entity\Base\Article $article
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class CustomerPrivateArticle extends CoatsEntity
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
