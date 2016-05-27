<?php
namespace App\Model\Entity\Base;

use Cake\ORM\Entity;

/**
 * CustomerTypeMapping Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property string $customer_code
 * @property string $customer_name
 * @property int $sales_org_id
 * @property \App\Model\Entity\Base\SalesOrg $sales_org
 * @property string $sales_org_name
 * @property string $customer_type_label
 * @property int $customer_type
 */
class CustomerTypeMapping extends CoatsEntity
{

}
