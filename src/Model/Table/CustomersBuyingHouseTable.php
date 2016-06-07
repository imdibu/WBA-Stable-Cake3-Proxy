<?php
namespace App\Model\Table;

class CustomersBuyingHouseTable extends CoatsTable
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

        $this->table('coats_customers_buying_houses');
        $this->displayField('customer_id');
        $this->primaryKey(['customer_id', 'buying_house_id']);
    }
}
