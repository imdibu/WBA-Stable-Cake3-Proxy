<?php
namespace App\Model\Table;

/**
 * Aros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentAros
 * @property \Cake\ORM\Association\HasMany $ChildAros
 */
class AroTable extends CoatsTable
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

        $this->table('coats_aros');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Tree');
    }
}
