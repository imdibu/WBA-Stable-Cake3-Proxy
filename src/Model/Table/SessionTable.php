<?php
namespace App\Model\Table;

class SessionTable extends CoatsTable
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

        $this->table('coats_sessions');
        $this->displayField('id');
    }
}
