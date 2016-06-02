<?php
namespace App\Model\Table;

/**
 * ArchiveLogs Model
 *
 */
class ArchiveLogTable extends CoatsTable
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

        $this->table('Coats_archive_logs');
    }
}
