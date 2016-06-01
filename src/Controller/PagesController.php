<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 26.05.2016
 * Time: 16:26
 */

namespace App\Controller;

use App\Services\Models\BulkOrderProxy3;

class PagesController extends AppController
{
    public function test()
    {
        $testData = [
            'BulkOrder' => [
                'customer_id' => 154160,
                'ship_to_party_id' => 162747,
                'requester_id' => 42456,
                'buyer_id' => 121,
                'po_number' => 'test po2',
                'required_date' => '30-06-2016',
                'stage_id' => 0,
                'buying_house_id' => '',
                'payer_id' => '',
                'requester_invoice' => 0,
                'requester_dn' => 0,
                'style' => '',
                'style_invoice' => 0,
                'style_dn' => 0,
                'buyer_sales_orderno' => '',
                'buyer_sales_orderno_invoice' => 0,
                'buyer_sales_orderno_dn' => 0,
                'warehouse_instruction' => '',
                'line_info_invoice' => 0,
                'line_info_dn' => 0,
                'sales_org_id' => 72,
                'order_no' => 70215680,
                'source_id' => 1,
                'status_id' => 1,
                // to be inserted at model level
                'created_user_id' => 1
            ],
            'BulkOrderLine' => [
                '0' => [
                    'customer_material_no' => '',
                    'article_id' => 27967,
                    'brand_id' => 30,
                    'ticket_id' => 10,
                    'length_id' => 16,
                    'finish_id' => 1,
                    'shade_id' => 412249,
                    'ordered_quantity' => 1,
                    'adjusted_quantity' => 1,
                    'required_date' => '2016-06-30',
                    'line_no' => 10,
                ],
                '1' => [
                    'customer_material_no' => '',
                    'article_id' => 28019,
                    'brand_id' => 16,
                    'ticket_id' => 10,
                    'length_id' => 16,
                    'finish_id' => 1,
                    'shade_id' => 412249,
                    'ordered_quantity' => 1,
                    'adjusted_quantity' => 1,
                    'required_date' => '2016-06-30',
                    'line_no' => 20,
                ]
            ]
        ];

        $bulkOrderSave = new BulkOrderProxy3();
        $bulkOrderSave->save($testData);
        die();
    }
}