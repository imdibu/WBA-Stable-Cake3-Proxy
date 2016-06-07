<?php
namespace App\Model\Table;

/**
 * Acos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AccessTypes
 * @property \Cake\ORM\Association\BelongsTo $ParentAcos
 * @property \Cake\ORM\Association\HasMany $ChildAcos
 */
class AcoTable extends CoatsTable
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

        $this->table('coats_acos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Tree');
    }
}
