<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 30.06.2016
 * Time: 10:57
 */

namespace App\Extensions\Database;

use PDO;

class PDOSharedConnection
{
    /**
     * @var PDOSharedConnection
     */
    protected static $instance;

    protected $transactionStarted = false;
    protected $transactionNesting = 0;

    private function __construct()
    {
        $this->transactionStarted = false;
        $this->transactionNesting = 0;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setTransactionStatus($started = false, $nesting = 0)
    {
        $this->transactionStarted = $started;
        $this->transactionNesting = $nesting;
    }

    public function getTransactionStatus()
    {
        return [
           $this->transactionStarted,
            $this->transactionNesting
        ];
    }
}