<?php
namespace App\Model\Table\Base;

use App\Model\Entity\IntegrationEsquelmrpgroup;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IntegrationEsquelmrpgroups Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 */
class IntegrationEsquelmrpgroupsTable extends CoatsTable
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

        $this->table('coats_integration_esquelmrpgroups');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('mrpgroup');

        $validator
            ->allowEmpty('customer_code');

        $validator
            ->integer('sales_org')
            ->allowEmpty('sales_org');

        $validator
            ->allowEmpty('uploaderid');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->allowEmpty('template');

        $validator
            ->allowEmpty('customer_in_uploadfile');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
