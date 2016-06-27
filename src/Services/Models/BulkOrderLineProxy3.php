<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 30.05.2016
 * Time: 15:22
 */

namespace App\Services\Models;


class BulkOrderLineProxy3 extends BaseModelProxy3
{
    public $model = 'BulkOrderLine';

    private function unique_hash($key_line = null, $key_order = null)
    {
        $input = [
            'line' => $key_line,
            'order' => $key_order
        ];

        return md5(serialize($input));
    }

    public function create($model, $fields, $values)
    {
        $data = array_combine($fields, $values);

        $fields[] = 'unique_hash';
        $values[] = $this->unique_hash($data['line_no'], $data['order_id']);

        return parent::create($model, $fields, $values);
    }

    public function update($model, $fields, $values)
    {
        $data = array_combine($fields, $values);

        if (isset($data['line_no']) && isset($data['order_id'])) {
            $fields[] = 'unique_hash';
            $values[] = $this->unique_hash($data['line_no'], $data['order_id']);
        }

        return parent::update($model, $fields, $values);
    }
}