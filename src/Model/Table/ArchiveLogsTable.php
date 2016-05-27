<?php
namespace App\Model\Table\Base;

use App\Model\Entity\ArchiveLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArchiveLogs Model
 *
 */
class ArchiveLogsTable extends CoatsTable
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

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('Table_Name');

        $validator
            ->dateTime('Cr_date')
            ->allowEmpty('Cr_date');

        $validator
            ->allowEmpty('Remarks');

        return $validator;
    }
}
