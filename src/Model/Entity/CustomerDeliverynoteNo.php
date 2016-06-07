<?php
namespace App\Model\Entity;



/**
 * CustomerDeliverynoteNo Entity.
 *
 * @property int $id
 * @property string $evervan_delivery_note_no
 * @property string $coats_deliverynote_no
 * @property int $orderid
 * @property int $customer_id
 * @property \App\Model\Entity\Base\Customer $customer
 * @property \Cake\I18n\Time $deliverydate
 */
class CustomerDeliverynoteNo extends CoatsEntity
{

}
