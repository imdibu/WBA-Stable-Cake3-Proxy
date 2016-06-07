<?php
namespace App\Model\Table;

class IntegrationSpecialCustomerTable extends CoatsTable
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

        $this->table('coats_integration_special_customers');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
