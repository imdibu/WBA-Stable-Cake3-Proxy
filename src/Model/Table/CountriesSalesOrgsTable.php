<?php
namespace App\Model\Table\Base;

use App\Model\Entity\CountriesSalesOrg;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CountriesSalesOrgs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 */
class CountriesSalesOrgsTable extends CoatsTable
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

        $this->table('coats_countries_sales_orgs');
        $this->displayField('country_id');
        $this->primaryKey(['country_id', 'sales_org_id']);

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        return $rules;
    }
}
