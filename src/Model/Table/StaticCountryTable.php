<?php
namespace App\Model\Table;

class StaticCountryTable extends CoatsTable
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

        $this->table('coats_static_countries');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
