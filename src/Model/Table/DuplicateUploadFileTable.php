<?php
namespace App\Model\Table;

class DuplicateUploadFileTable extends CoatsTable
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

        $this->table('coats_duplicate_upload_files');
        $this->displayField('id');
        $this->primaryKey('id');
    }
}
