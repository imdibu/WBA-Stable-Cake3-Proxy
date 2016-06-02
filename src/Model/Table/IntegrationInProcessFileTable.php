<?php
namespace App\Model\Table;

class IntegrationInProcessFileTable extends CoatsTable
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

        $this->table('coats_integration_in_process_files');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
