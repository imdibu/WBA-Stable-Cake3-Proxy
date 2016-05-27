<?php
namespace App\Model\Table\Base;

use App\Model\Entity\HubStock;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HubStocks Model
 *
 * @property \Cake\ORM\Association\BelongsTo $SalesOrgs
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Plants
 * @property \Cake\ORM\Association\BelongsTo $Articles
 * @property \Cake\ORM\Association\BelongsTo $Brands
 * @property \Cake\ORM\Association\BelongsTo $Tickets
 * @property \Cake\ORM\Association\BelongsTo $Shades
 * @property \Cake\ORM\Association\BelongsTo $MumTypes
 */
class HubStocksTable extends CoatsTable
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

        $this->table('coats_hub_stocks');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('SalesOrgs', [
            'foreignKey' => 'sales_org_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Plants', [
            'foreignKey' => 'plant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id'
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tickets', [
            'foreignKey' => 'ticket_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Shades', [
            'foreignKey' => 'shade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MumTypes', [
            'foreignKey' => 'mum_type_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('quantity')
            ->allowEmpty('quantity');

        $validator
            ->allowEmpty('article');

        $validator
            ->allowEmpty('shade');

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
        $rules->add($rules->existsIn(['sales_org_id'], 'SalesOrgs'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['plant_id'], 'Plants'));
        $rules->add($rules->existsIn(['article_id'], 'Articles'));
        $rules->add($rules->existsIn(['brand_id'], 'Brands'));
        $rules->add($rules->existsIn(['ticket_id'], 'Tickets'));
        $rules->add($rules->existsIn(['shade_id'], 'Shades'));
        $rules->add($rules->existsIn(['mum_type_id'], 'MumTypes'));
        return $rules;
    }
}
