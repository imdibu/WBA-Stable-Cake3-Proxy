<?php
namespace App\Model\Table;

class EndProductTypeTable extends CoatsTable
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('coats_end_product_types');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
