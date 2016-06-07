<?php
namespace App\Model\Table;

class CountriesSalesOrgTable extends CoatsTable
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
    }
}
