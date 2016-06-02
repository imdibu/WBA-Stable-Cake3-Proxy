<?php
namespace App\Model\Table;

class UsersCustomerTable extends CoatsTable
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

        $this->table('coats_users_customers');
        $this->displayField('user_id');
        $this->primaryKey(['user_id', 'customer_id']);
    }
}
