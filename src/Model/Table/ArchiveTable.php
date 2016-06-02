<?php
namespace App\Model\Table;

/**
 * Archives Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Requesters
 * @property \Cake\ORM\Association\BelongsTo $CreatedUsers
 */
class ArchiveTable extends CoatsTable
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

        $this->table('coats_archives');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }
}
