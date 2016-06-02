<?php
namespace App\Model\Table;

class SampleErrorLogTable extends CoatsTable
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

        $this->table('coats_sample_error_logs');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
