<?php
namespace App\Model\Table;

class InprocessFileTable extends CoatsTable
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

        $this->table('coats_in_process_files');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
