<?php
namespace App\Model\Table;

class CustomersBusinessPrincipalTable extends CoatsTable
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

        $this->table('coats_customers_business_principals');
        $this->displayField('customer_id');
        $this->primaryKey(['customer_id', 'business_principal_id']);
    }
}
