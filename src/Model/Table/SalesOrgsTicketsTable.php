<?php
namespace App\Model\Table;

class SalesOrgsTicketTable extends CoatsTable
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

        $this->table('coats_sales_orgs_tickets');
        $this->displayField('sales_org_id');
        $this->primaryKey(['sales_org_id', 'ticket_id']);
    }
}
