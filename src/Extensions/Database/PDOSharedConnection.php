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
    protected $connection;

    protected $transactionStarted = false;
    protected $transactionNesting = 0;

    private function __construct($dsn, array $config)
    {
        $this->connection = new PDO(
            $dsn,
            $config['username'],
            $config['password'],
            $config['flags']
        );
    }

    public static function getInstance($dsn = null, array $config = null)
    {
        if (self::$instance === null && ($dsn === null || $config === null)) {
            throw new \MissingDatabaseException('No database connection string exists in config');
        }

        if (self::$instance === null) {
            self::$instance = new self($dsn, $config);
        }

        return self::$instance;
    }

    public function getConnection()
    {
       return self::$instance->connection;
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