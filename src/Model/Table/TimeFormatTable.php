<?php
namespace App\Model\Table;

class TimeFormatTable extends CoatsTable
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

        $this->table('coats_time_formats');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
