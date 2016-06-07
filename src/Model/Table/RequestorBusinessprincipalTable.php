<?php
namespace App\Model\Table;

class RequestorBusinessprincipalTable extends CoatsTable
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

        $this->table('coats_requestor_businessprincipals');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
