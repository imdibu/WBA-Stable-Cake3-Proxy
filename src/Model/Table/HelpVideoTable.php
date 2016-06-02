<?php
namespace App\Model\Table;

class HelpVideoTable extends CoatsTable
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

        $this->table('coats_help_videos');
        $this->displayField('title');
        $this->primaryKey('id');
    }
}
