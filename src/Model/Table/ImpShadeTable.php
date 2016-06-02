<?php
namespace App\Model\Table;

class ImpShadeTable extends CoatsTable
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

        $this->table('coats_imp_shades');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
