<?php
namespace App\Model\Table;

class MumTypeTable extends CoatsTable
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

        $this->table('coats_mum_types');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
