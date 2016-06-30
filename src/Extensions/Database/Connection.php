<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 30.06.2016
 * Time: 15:29
 */

namespace App\Extensions\Database;


class Connection extends \Cake\Database\Connection
{
    static $transactionIndex = 0;
    /**
     * see if any transactions are started and their current level (nesting)
     */
    protected function getCurrentTransactionInfo()
    {
        list($this->_transactionStarted, $this->_transactionLevel) = \App\Extensions\Database\PDOSharedConnection::getInstance()->getTransactionStatus();
    }

    /**
     * set the current transaction status and the level (nesting) of the current transaction
     */
    protected function setCurrentTransactionInfo()
    {
        \App\Extensions\Database\PDOSharedConnection::getInstance()->setTransactionStatus($this->_transactionStarted, $this->_transactionLevel);
    }

    public function begin()
    {
        $this->getCurrentTransactionInfo();
        $transactionBegun = parent::begin();
        $this->setCurrentTransactionInfo();

        return $transactionBegun;
    }

    public function commit()
    {
        $this->getCurrentTransactionInfo();
        $transactionCommited = parent::commit();
        $this->setCurrentTransactionInfo();

        return $transactionCommited;
    }
}