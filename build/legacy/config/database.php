<?php

/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour of Cake.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * In this file you set up your database connection details.
 *
 * @package       cake.config
 */

/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * datasource => The name of a supported datasource; valid options are as follows:
 * 		Database/Mysql 		- MySQL 4 & 5,
 * 		Database/Sqlite		- SQLite (PHP5 only),
 * 		Database/Postgres	- PostgreSQL 7 and higher,
 * 		Database/Sqlserver	- Microsoft SQL Server 2005 and higher
 *
 * You can add custom database datasources (or override existing datasources) by adding the
 * appropriate file to app/Model/Datasource/Database.  Datasources should be named 'MyDatasource.php',
 *
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * host =>
 * the host you connect to the database. To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database.  This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres specifies which schema you would like to use the tables in. Postgres defaults to 'public'.
 *
 * encoding =>
 * For MySQL, Postgres specifies the character encoding to use when connecting to the
 * database. Uses database default not specified.
 *
 * unix_socket =>
 * For MySQL to connect via socket specify the `unix_socket` parameter instead of `host` and `port`
 */
class DATABASE_CONFIG {

// For MSSQL




  /*public $default = array(
		'datasource' => 'Database/Sqlserver',
		'persistent' => false,
		'host' => '10.14.14.6',
		'login' => 'svcwcs',
		'password' => 'svcwcs',
		//'database' => 'coats_qa_p4i',
		'database' => 'coats_wba_p4i_Axian',
		'prefix' => 'coats_',	
	);*/

 public $default = array(
        'datasource' => 'Database/Sqlserver',
        'persistent' => false,
        'host' => '10.4.255.7,10101',
        'login' => 'Wcsqa',
        'password' => 'P@$$w0rd',
        //'database' => 'coats_wba_p4i_hk',
        'database' =>'coats_dev_p4i',
        'prefix' => 'coats_',
            //'encoding'  => PDO::SQLSRV_ENCODING_UTF8
    );
    
    
   /* public $default = array(
        'datasource' => 'Database/Sqlserver',
        'persistent' => false,
        'host' => '10.4.255.6',
        'login' => 'coaadm',
        'password' => 'Password@123',
        'database' => 'coats_wba_p4i',
        'prefix' => 'coats_',
            //'encoding'  => PDO::SQLSRV_ENCODING_UTF8
    );*/
    
    
    
   /* public $default = array(
        'datasource' => 'Database/Sqlserver',
        'persistent' => false,
        'host' => '127.0.0.1',
        'login' => 'sa',
        'password' => 'sa',
        'database' => 'coats_wba_hk_20160103',
        'prefix' => 'coats_',
            //'encoding'  => PDO::SQLSRV_ENCODING_UTF8
    );*/
    public $sandb = array(
        'datasource' => 'Database/Sqlserver',
        'persistent' => false,
        'host' => 'INMDLW7SANTHANA',
        'login' => '',
        'password' => '',
        'database' => 'coats_wba_p4i',
        'prefix' => 'coats_',
        'encoding' => PDO::SQLSRV_ENCODING_UTF8
    );
    public $default_ = array(
        'datasource' => 'ArraySource'
    );
    public $array = array(
        'datasource' => 'ArraySource'
    );

}
