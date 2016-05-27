<?php
namespace App\Model\Table\Base;

use App\Model\Entity\CustomercareLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomercareLog Model
 *
 */
class CustomercareLogTable extends CoatsTable
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

        $this->table('coats_customercare_log');
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
            ->allowEmpty('Report_Name');

        $validator
            ->allowEmpty('Actions');

        $validator
            ->allowEmpty('Records');

        $validator
            ->allowEmpty('Message');

        $validator
            ->dateTime('Cr_Date')
            ->allowEmpty('Cr_Date');

        $validator
            ->allowEmpty('filename');

        return $validator;
    }
}
