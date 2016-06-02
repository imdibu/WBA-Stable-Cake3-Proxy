<?php
namespace App\Model\Table;

class ScenarioTable extends CoatsTable
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

        $this->table('coats_scenarios');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
