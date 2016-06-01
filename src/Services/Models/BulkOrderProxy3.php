<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 30.05.2016
 * Time: 10:56
 */

namespace App\Services\Models;


class BulkOrderProxy3 extends BaseModelProxy3
{
    public $model = 'BulkOrder';
    public $foreign_key_alias = 'order_id';
}