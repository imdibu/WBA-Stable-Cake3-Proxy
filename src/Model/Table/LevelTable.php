<?php
namespace App\Model\Table;

class LevelTable extends CoatsTable
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

        $this->table('coats_levels');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
