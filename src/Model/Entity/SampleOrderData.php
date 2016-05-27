<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * SampleOrderData Entity.
 *
 * @property int $order_id
 * @property \App\Model\Entity\Base\Order $order
 * @property string $customer_name
 * @property string $customer_code
 * @property int $cce_solution_id
 * @property \App\Model\Entity\Base\CceSolution $cce_solution
 * @property int $priority_id
 * @property \App\Model\Entity\Base\Priority $priority
 * @property string $ship_to_party_name
 * @property string $ship_to_party_no
 * @property string $ship_to_party_address_line1
 * @property string $ship_to_party_address_line2
 * @property string $ship_to_party_street
 * @property string $ship_to_party_city
 * @property string $ship_to_party_state
 * @property string $ship_to_party_zip_code
 * @property string $requester_first_name
 * @property string $requester_last_name
 * @property string $requester_email
 * @property string $requester_mobile
 * @property string $business_principal_name
 * @property string $business_principal_no
 * @property string $ls_primary
 * @property string $ls_secondary
 * @property string $ls_third
 * @property string $creator_first_name
 * @property string $creator_last_name
 * @property string $creator_email
 * @property string $creator_mobile
 * @property string $hub_name
 * @property string $country_name
 * @property string $sales_org_name
 * @property string $fce_first_name
 * @property string $fce_last_name
 * @property string $fce_email
 * @property string $fce_mobile
 * @property string $buying_house_name
 * @property string $buying_house_no
 */
class SampleOrderData extends CoatsEntity
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
        'order_id' => false,
    ];
}
