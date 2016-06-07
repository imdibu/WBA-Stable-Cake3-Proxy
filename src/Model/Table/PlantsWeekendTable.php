<?php
namespace App\Model\Table;

class PlantsWeekendTable extends CoatsTable
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

        $this->table('coats_plants_weekends');
        $this->displayField('plant_id');
        $this->primaryKey(['plant_id', 'weekend_id']);
    }
}
