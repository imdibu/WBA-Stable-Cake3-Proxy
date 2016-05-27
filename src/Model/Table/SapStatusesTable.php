<?php
namespace App\Model\Table\Base;

use App\Model\Entity\SapStatus;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SapStatuses Model
 *
 */
class SapStatusesTable extends CoatsTable
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

        $this->table('coats_sap_statuses');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('sap_status', 'create')
            ->notEmpty('sap_status');

        $validator
            ->boolean('access_from_inbox')
            ->allowEmpty('access_from_inbox');

        $validator
            ->boolean('access_from_confirmProduction')
            ->allowEmpty('access_from_confirmProduction');

        return $validator;
    }
}
