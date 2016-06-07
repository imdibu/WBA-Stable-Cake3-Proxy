<?php
namespace App\Model\Table;

class ShadeRuleTable extends CoatsTable
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

        $this->table('coats_shade_rules');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
