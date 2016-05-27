<?php
namespace App\Model\Table\Base;

use App\Model\Entity\LanguageLiveLink;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LanguageLiveLinks Model
 *
 */
class LanguageLiveLinksTable extends CoatsTable
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

        $this->table('coats_language_live_links');
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
            ->requirePresence('lang_live_name', 'create')
            ->notEmpty('lang_live_name');

        $validator
            ->requirePresence('lang_live_code', 'create')
            ->notEmpty('lang_live_code');

        return $validator;
    }
}
