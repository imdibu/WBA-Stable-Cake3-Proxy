<?php
namespace App\Model\Table;

/**
 * Audit Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class AuditTable extends CoatsTable
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

        $this->table('coats_audit');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
