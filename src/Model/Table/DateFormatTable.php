<?php
namespace App\Model\Table;

class DateFormatTable extends CoatsTable
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

        $this->table('coats_date_formats');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
