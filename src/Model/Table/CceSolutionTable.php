<?php
namespace App\Model\Table;

class CceSolutionTable extends CoatsTable
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

        $this->table('coats_cce_solutions');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
