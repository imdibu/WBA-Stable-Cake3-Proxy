<?php
namespace App\Model\Table;

class UsersHubTable extends CoatsTable
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

        $this->table('coats_users_hubs');
        $this->displayField('user_id');
        $this->primaryKey(['user_id', 'hub_id']);
    }
}
