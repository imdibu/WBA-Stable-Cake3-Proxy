<?php
namespace App\Model\Table;

class UsersBusinessPrincipalTable extends CoatsTable
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

        $this->table('coats_users_business_principals');
        $this->displayField('user_id');
        $this->primaryKey(['user_id', 'business_principal_id']);
    }
}
