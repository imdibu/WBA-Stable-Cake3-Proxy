<?php
namespace App\Model\Table;

class UsersSalesOrgTable extends CoatsTable
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

        $this->table('coats_users_sales_orgs');
        $this->displayField('user_id');
        $this->primaryKey(['user_id', 'sales_org_id']);
    }
}
