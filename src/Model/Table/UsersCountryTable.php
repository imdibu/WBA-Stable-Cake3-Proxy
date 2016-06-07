<?php
namespace App\Model\Table;

class UsersCountrieTable extends CoatsTable
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

        $this->table('coats_users_countries');
        $this->displayField('user_id');
        $this->primaryKey(['user_id', 'country_id']);
    }
}
