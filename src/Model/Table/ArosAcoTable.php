<?php
namespace App\Model\Table;

/**
 * ArosAcos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Aros
 * @property \Cake\ORM\Association\BelongsTo $Acos
 */
class ArosAcoTable extends CoatsTable
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

        $this->table('coats_aros_acos');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
