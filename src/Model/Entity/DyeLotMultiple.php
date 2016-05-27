<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * DyeLotMultiple Entity.
 *
 * @property int $id
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property int $article_id
 * @property \App\Model\Entity\Base\Article $article
 * @property int $brand_id
 * @property \App\Model\Entity\Base\Brand $brand
 * @property int $ticket_id
 * @property \App\Model\Entity\Base\Ticket $ticket
 * @property int $length_id
 * @property \App\Model\Entity\Base\Length $length
 * @property int $finish_id
 * @property \App\Model\Entity\Base\Finish $finish
 * @property int $level
 * @property int $range_start
 * @property int $range_until
 * @property int $step_value
 * @property int $shade_rule
 * @property int $status_id
 * @property \App\Model\Entity\Base\Status $status
 * @property \Cake\I18n\Time $created
 * @property int $created_user_id
 * @property \App\Model\Entity\Base\CreatedUser $created_user
 * @property \Cake\I18n\Time $updated
 * @property int $updated_user_id
 * @property \App\Model\Entity\Base\UpdatedUser $updated_user
 */
class DyeLotMultiple extends CoatsEntity
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
