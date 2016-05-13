<?php

/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
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
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Cache Engine Configuration
 * Default settings provided below
 *
 * File storage engine.
 *
 * 	 Cache::config('default', array(
 * 		'engine' => 'File', //[required]
 * 		'duration'=> 3600, //[optional]
 * 		'probability'=> 100, //[optional]
 * 		'path' => CACHE, //[optional] use system tmp directory - remember to use absolute path
 * 		'prefix' => 'cake_', //[optional]  prefix every cache file with this string
 * 		'lock' => false, //[optional]  use file locking
 * 		'serialize' => true, // [optional]
 * 		'mask' => 0666, // [optional] permission mask to use when creating cache files
 * 	));
 *
 * APC (http://pecl.php.net/package/APC)
 *
 * 	 Cache::config('default', array(
 * 		'engine' => 'Apc', //[required]
 * 		'duration'=> 3600, //[optional]
 * 		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 	));
 *
 * Xcache (http://xcache.lighttpd.net/)
 *
 * 	 Cache::config('default', array(
 * 		'engine' => 'Xcache', //[required]
 * 		'duration'=> 3600, //[optional]
 * 		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional] prefix every cache file with this string
 * 		'user' => 'user', //user from xcache.admin.user settings
 * 		'password' => 'password', //plaintext password (xcache.admin.pass)
 * 	));
 *
 * Memcache (http://memcached.org/)
 *
 * 	 Cache::config('default', array(
 * 		'engine' => 'Memcache', //[required]
 * 		'duration'=> 3600, //[optional]
 * 		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 		'servers' => array(
 * 			'127.0.0.1:11211' // localhost, default port 11211
 * 		), //[optional]
 * 		'persistent' => true, // [optional] set this to false for non-persistent connections
 * 		'compress' => false, // [optional] compress data in Memcache (slower, but uses less memory)
 * 	));
 *
 *  Wincache (http://php.net/wincache)
 *
 * 	 Cache::config('default', array(
 * 		'engine' => 'Wincache', //[required]
 * 		'duration'=> 3600, //[optional]
 * 		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 	));
 *
 * Redis (http://http://redis.io/)
 *
 * 	 Cache::config('default', array(
 * 		'engine' => 'Redis', //[required]
 * 		'duration'=> 3600, //[optional]
 * 		'probability'=> 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 		'server' => '127.0.0.1' // localhost
 * 		'port' => 6379 // default port 6379
 * 		'timeout' => 0 // timeout in seconds, 0 = unlimited
 * 		'persistent' => true, // [optional] set this to false for non-persistent connections
 * 	));
 */
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models', '/next/path/to/models'),
 *     'Model/Behavior'            => array('/path/to/behaviors', '/next/path/to/behaviors'),
 *     'Model/Datasource'          => array('/path/to/datasources', '/next/path/to/datasources'),
 *     'Model/Datasource/Database' => array('/path/to/databases', '/next/path/to/database'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions', '/next/path/to/sessions'),
 *     'Controller'                => array('/path/to/controllers', '/next/path/to/controllers'),
 *     'Controller/Component'      => array('/path/to/components', '/next/path/to/components'),
 *     'Controller/Component/Auth' => array('/path/to/auths', '/next/path/to/auths'),
 *     'Controller/Component/Acl'  => array('/path/to/acls', '/next/path/to/acls'),
 *     'View'                      => array('/path/to/views', '/next/path/to/views'),
 *     'View/Helper'               => array('/path/to/helpers', '/next/path/to/helpers'),
 *     'Console'                   => array('/path/to/consoles', '/next/path/to/consoles'),
 *     'Console/Command'           => array('/path/to/commands', '/next/path/to/commands'),
 *     'Console/Command/Task'      => array('/path/to/tasks', '/next/path/to/tasks'),
 *     'Lib'                       => array('/path/to/libs', '/next/path/to/libs'),
 *     'Locale'                    => array('/path/to/locales', '/next/path/to/locales'),
 *     'Vendor'                    => array('/path/to/vendors', '/next/path/to/vendors'),
 *     'Plugin'                    => array('/path/to/plugins', '/next/path/to/plugins'),
 * ));
 *
 */
/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */
/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */
/*
  CakePlugin::loadAll(array(
  'Usermgmt' => array('routes' => true, 'bootstrap' => true),
  ));
 */

/**
 * You can attach event listeners to the request lifecyle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 * 		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 * 		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callable' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 * 		array('callable' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array(
    'AssetDispatcher',
    'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
    'engine' => 'FileLog',
    'types' => array('notice', 'info', 'debug'),
    'file' => 'debug/'.date('Ymd'),
));
CakeLog::config('error', array(
    'engine' => 'FileLog',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'file' => 'error/'.date('Ymd'),
));


CakeLog::config('shipnotice_log', array(
    'engine' => 'FileLog',
    'types' => array('shipnotice_log'),
    'file' => 'shipnotice_log/'.date('Ymd'),
));


CakeLog::config('custom_log', array(
    'engine' => 'FileLog',
    'types' => array('custom_log'),
    'file' => 'custom_log/'.date('Ymd'),
));

CakeLog::config('manualorder_log', array(
    'engine' => 'FileLog',
    'types' => array('manualorder_log'),
    'file' => 'manualorder_log/'.date('Ymd'),
));





//defining constants

switch (Configure::read('env')) {

	case 'AX':
        define('SAMPLE_ORDER_NO_START', 10000000);
        define('BULK_ORDER_NO_START', 50000000);
	    define('SAP_URL','http://172.18.1.139:56500/WebServicePortal/execute?service=InboundSalesOrderIdoc&template=CCEversion03'); //update the URL as per colin suggetion
	    define('SAP_ATP_URL', 'http://172.18.2.149:57500/wba/api/Atpcheck');
        define('SAP_PRICE_CHECK_URL', 'http://172.18.1.139:56500/wba/api/Netprice');  //colin change replaced on sept 28
        define('LRM_WSDL', 'http://172.18.2.201/LabRequestInterface/wcfLabRequest.cLabRequestService.svc?wsdl');
        define('SMS_OUTWARD_API_URL', 'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0');
        define('SMS_OUTWARD_API_DEST', 'pno');
        define('SMS_OUTWARD_API_MSG', 'msgtxt');
        define('SMS_INWARD_API_PREFIX', 'Coats WCS');
        define('SMS_INWARD_API_SENDER', 'send');
        define('SMS_INWARD_API_DEST', 'dest');
        define('SMS_INWARD_API_MSG', 'msg');
        define('SMS_FORWARD_URL', 'http://sms.coats.com/Gateway/RMessage.asp?send=%s&dest=%s&msg=%s');
        define('CC_REPORT_SCOPE_URL', 'http://172.18.2.149:57500/wba/api/ReportScope');
        define('CC_REPORT_INVOICE_URL', 'http://172.18.2.149:57500/wba/api/OpenClosedInvoiceReport');
        define('CC_REPORT_DELIVERY_NOTE_URL', 'http://172.18.2.149:57500/wba/api/DeliveryReport');
        define('CC_REPORT_PURCHASE_SUMMARY_URL', 'http://172.18.2.149:57500/wba/api/PurchasesReport');
        define('CC_REPORT_OUTSTANDING_PAYMENT_URL', 'http://172.18.2.149:57500/wba/api/OutstandingPaymentsReport');
        define('DOMAIN_URL','wcs.coatscolorexpress.com');
        Configure::write('GisIps', array(
            '192.168.0.79',
            '192.168.0.93',
            '192.168.0.111',
        ));
        define('SAP_ORDER_SCOPE_URL', 'http://172.18.1.129:55500/wba/api/OrderUpdateScope');
        define('SAP_ORDER_DATA_URL', 'http://172.18.2.149:57500/wba/api/OrderUpdateInfo');
        Configure::write('SapClientGMT', array(
            // date('H') => SAP Instance
			'5'=>array('SAP700'),
            '6'=>array('SAP701'),
            '23'=>array('SAP702'),
            '00'=>array('SAP703'),
            '14'=>array('SAP700'),
            '16'=>array('SAP701'),
			'17'=>array('SAP702'),
			'18'=>array('SAP703')
        ));
        define('SAP_IMM_ORDER_DATA_URL', 'http://172.18.2.149:57500/wba/api/OrderUpdateScope?response=immediate');
        define('SAP_MATERIAL_CHECK_URL', 'http://172.18.2.149:57500/wba/api/MaterialStatus');
		define('SYSTEM_INTEGRATION_ROOT',dirname(dirname(ROOT)));
		define('SHARED_BACKEND_FAILED_FOLDER',TMP . 'backend_uploads/failed_files/');
		define('SHARED_SFTP_FAILED_FOLDER',SYSTEM_INTEGRATION_ROOT.'ftproot/Coats/customer_sftp/failed_files');
		define('FEATURE_UPLOAD_PATH',APP.'webroot/files/feature_uploads/');
		//new Exception logs
		define('EXCEPTION_LOG_URL','http://10.14.14.8:8080/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/LogException');
		define('EXCEPTION_RETREVAL_URL','http://10.14.14.8:8080/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/ReadExceptionLogs');
		define('INSTANCE_TYPE','AX');
		define('ORDER_PO_TYPE','ZCCE');

        break;

	case 'HK':
        define('SAMPLE_ORDER_NO_START', 30000000);
        define('BULK_ORDER_NO_START', 70000000);
	   define('SAP_URL','http://172.18.1.139:56500/WebServicePortal/execute?service=InboundSalesOrderIdoc&template=CCEversion03'); //update the URL as per colin suggetion
		define('SAP_ATP_URL', 'http://172.18.2.149:57500/wba/api/Atpcheck');
        define('SAP_PRICE_CHECK_URL', 'http://172.18.1.139:56500/wba/api/Netprice');  //colin change replaced on sept 28
		define('LRM_WSDL', 'http://172.18.2.201/LabRequestInterface/wcfLabRequest.cLabRequestService.svc?wsdl');
        define('SMS_OUTWARD_API_URL', 'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0');
        define('SMS_OUTWARD_API_DEST', 'pno');
        define('SMS_OUTWARD_API_MSG', 'msgtxt');
        define('SMS_INWARD_API_PREFIX', 'Coats WCS');
        define('SMS_INWARD_API_SENDER', 'send');
        define('SMS_INWARD_API_DEST', 'dest');
        define('SMS_INWARD_API_MSG', 'msg');
        define('SMS_FORWARD_URL', 'http://sms.coats.com/Gateway/RMessage.asp?send=%s&dest=%s&msg=%s');
        define('CC_REPORT_SCOPE_URL', 'http://172.18.2.149:57500/WebServicePortal/execute?service=CCReportScopeHK');
        define('CC_REPORT_INVOICE_URL', 'http://172.18.2.149:57500/WebServicePortal/execute?service=CCOpenClosedInvoiceReportHK');
        define('CC_REPORT_DELIVERY_NOTE_URL', 'http://172.18.2.149:57500/WebServicePortal/execute?service=CCDeliveryReportHK');
        define('CC_REPORT_PURCHASE_SUMMARY_URL', 'http://172.18.2.149:57500/WebServicePortal/execute?service=CCPurchasesReportHK');
        define('CC_REPORT_OUTSTANDING_PAYMENT_URL', 'http://172.18.2.149:57500/wba/api/OutstandingPaymentsReport');
        define('DOMAIN_URL','wcs.coatscolorexpress.com');
        Configure::write('GisIps', array(
            '192.168.0.79',
            '192.168.0.93',
            '192.168.0.111',
        ));
        define('SAP_ORDER_SCOPE_URL', 'http://172.18.1.129:55500/wba/api/OrderUpdateScope');
        define('SAP_ORDER_DATA_URL', 'http://172.18.2.149:57500/WebServicePortal/execute?service=OrderUpdateInfoHK');
        Configure::write('SapClientGMT', array(
            // date('H') => SAP Instance
			'5'=>array('SAP700'),
            '6'=>array('SAP701'),
            '23'=>array('SAP702'),
            '00'=>array('SAP703'),
            '14'=>array('SAP700'),
            '16'=>array('SAP701'),
			'17'=>array('SAP702'),
			'18'=>array('SAP703')
        ));
        define('SAP_IMM_ORDER_DATA_URL', 'http://172.18.2.149:57500/WebServicePortal/execute?service=OrderUpdateScopeHK&response=immediate');
        define('SAP_MATERIAL_CHECK_URL', 'http://172.18.2.149:57500/wba/api/MaterialStatus');
		define('SYSTEM_INTEGRATION_ROOT',dirname(dirname(ROOT)));
		define('SHARED_BACKEND_FAILED_FOLDER',TMP . 'backend_uploads/failed_files/');
		define('SHARED_SFTP_FAILED_FOLDER',SYSTEM_INTEGRATION_ROOT.'ftproot/Coats/customer_sftp/failed_files');
		define('FEATURE_UPLOAD_PATH',APP.'webroot/files/feature_uploads/');
	//new exception logs
		define('EXCEPTION_LOG_URL','http://adaziewbap01.cloudapp.net/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/LogException');
	    define('EXCEPTION_RETREVAL_URL','http://adaziewbap01.cloudapp.net/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/ReadExceptionLogs');
		define('INSTANCE_TYPE','HK');
		define('ORDER_PO_TYPE','ZCCH');
		break;

    case 'prod':
        define('SAMPLE_ORDER_NO_START', 10000000);
        define('BULK_ORDER_NO_START', 50000000);
	   define('SAP_URL','http://172.18.1.139:56500/WebServicePortal/execute?service=InboundSalesOrderIdoc&template=CCEversion03'); //update the URL as per colin suggetion 
		define('SAP_ATP_URL', 'http://172.18.2.149:57500/wba/api/Atpcheck');
        //define('SAP_PRICE_CHECK_URL', 'http://172.18.2.149:57500/wba/api/Netprice');
		define('SAP_PRICE_CHECK_URL', 'http://172.18.1.139:56500/wba/api/Netprice');  //colin change replaced on sept 28
        define('LRM_WSDL', 'http://172.18.2.201/LabRequestInterface/wcfLabRequest.cLabRequestService.svc?wsdl');
        define('SMS_OUTWARD_API_URL', 'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0');
        define('SMS_OUTWARD_API_DEST', 'pno');
        define('SMS_OUTWARD_API_MSG', 'msgtxt');
        define('SMS_INWARD_API_PREFIX', 'Coats WCS');
        define('SMS_INWARD_API_SENDER', 'send');
        define('SMS_INWARD_API_DEST', 'dest');
        define('SMS_INWARD_API_MSG', 'msg');
        define('SMS_FORWARD_URL', 'http://sms.coats.com/Gateway/RMessage.asp?send=%s&dest=%s&msg=%s');
        define('CC_REPORT_SCOPE_URL', 'http://172.18.2.149:57500/wba/api/ReportScope');
        define('CC_REPORT_INVOICE_URL', 'http://172.18.2.149:57500/wba/api/OpenClosedInvoiceReport');
        define('CC_REPORT_DELIVERY_NOTE_URL', 'http://172.18.2.149:57500/wba/api/DeliveryReport');
        define('CC_REPORT_PURCHASE_SUMMARY_URL', 'http://172.18.2.149:57500/wba/api/PurchasesReport');
        define('CC_REPORT_OUTSTANDING_PAYMENT_URL', 'http://172.18.2.149:57500/wba/api/OutstandingPaymentsReport');
        define('DOMAIN_URL','wcs.coatscolorexpress.com');
        Configure::write('GisIps', array(
            '192.168.0.79',
            '192.168.0.93',
            '192.168.0.111',
        ));
		define('SAP_ORDER_SCOPE_URL', 'http://172.18.1.129:55500/wba/api/OrderUpdateScope');
		
        define('SAP_ORDER_DATA_URL', 'http://172.18.2.149:57500/wba/api/OrderUpdateInfo');
        Configure::write('SapClientGMT', array(
            // date('H') => SAP Instance
			'5'=>array('SAP700'),
            '6'=>array('SAP701'),
            '23'=>array('SAP702'),
            '00'=>array('SAP703'),
            '14'=>array('SAP700'),
            '16'=>array('SAP701'),
			'17'=>array('SAP702'),
			'18'=>array('SAP703')
        ));
        define('SAP_IMM_ORDER_DATA_URL', 'http://172.18.2.149:57500/wba/api/OrderUpdateScope?response=immediate');
        define('SAP_MATERIAL_CHECK_URL', 'http://172.18.2.149:57500/wba/api/MaterialStatus');
		define('SYSTEM_INTEGRATION_ROOT',dirname(dirname(ROOT)));
		define('SHARED_BACKEND_FAILED_FOLDER',TMP . 'backend_uploads/failed_files/');
		define('SHARED_SFTP_FAILED_FOLDER',SYSTEM_INTEGRATION_ROOT.'ftproot/Coats/customer_sftp/failed_files');
		define('FEATURE_UPLOAD_PATH',APP.'webroot/files/feature_uploads/');
		//Exception logs
	define('EXCEPTION_LOG_URL','http://10.14.14.8:8080/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/LogException');
	define('EXCEPTION_RETREVAL_URL','http://10.14.14.8:8080/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/ReadExceptionLogs');

        break;
    case 'qa':
	define('SAMPLE_ORDER_NO_START', 10000000);
        define('BULK_ORDER_NO_START', 5000000);
	//colin suggetion based on WBA-277 (related to WBA-281)
	//**** Used web services**********
	//working changes
	define('SAP_URL','http://172.18.1.129:55500/WebServicePortal/execute?service=InboundSalesOrderIdoc&template=CCEversion05');
	define('SAP_ATP_URL', 'http://172.18.1.129:55500/wba/api/Atpcheck');
    define('SAP_PRICE_CHECK_URL', 'http://172.18.1.139:56500/wba/api/Netprice');  //colin change replaced on sept 28
	define('SAP_MATERIAL_CHECK_URL', 'http://172.18.1.139:56500/wba/api/MaterialStatus');
        define('LRM_WSDL','http://172.18.2.201/LabRequestInterfaceQA/wcfLabRequest.cLabRequestService.svc?wsdl');
        define('SMS_OUTWARD_API_URL', 'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0');
        define('SMS_OUTWARD_API_DEST', 'pno');
        define('SMS_OUTWARD_API_MSG', 'msgtxt');
        define('SMS_INWARD_API_PREFIX', 'Coats WCS');
        define('SMS_INWARD_API_SENDER', 'send');
        define('SMS_INWARD_API_DEST', 'dest');
        define('SMS_INWARD_API_MSG', 'msg');
        define('SMS_FORWARD_URL', 'http://sms.coats.com/Gateway/RMessage.asp?send=%s&dest=%s&msg=%s');
        define('CC_REPORT_SCOPE_URL', 'http://172.18.1.139:56500/wba/api/ReportScope');
        define('CC_REPORT_INVOICE_URL', 'http://172.18.1.139:56500/wba/api/OpenClosedInvoiceReport');
        define('CC_REPORT_DELIVERY_NOTE_URL', 'http://172.18.1.139:56500/wba/api/DeliveryReport');
        define('CC_REPORT_PURCHASE_SUMMARY_URL', 'http://172.18.1.139:56500/wba/api/PurchasesReport');
        define('CC_REPORT_OUTSTANDING_PAYMENT_URL', 'http://172.18.1.139:56500/wba/api/OutstandingPaymentsReport');
        define('DOMAIN_URL','qawcs.coatscolourexpress.com');
        Configure::write('GisIps', array(
            '192.168.0.79',
            '192.168.0.93',
            '192.168.0.111',
        ));       		
		define('SAP_ORDER_SCOPE_URL', 'http://172.18.1.129:55500/wba/api/OrderUpdateScope');		
        define('SAP_ORDER_DATA_URL', 'http://172.18.1.139:56500/wba/api/OrderUpdateInfo');
        Configure::write('SapClientGMT', array(
            // date('H') => SAP Instance
            '2'=>array('SAP700'),
            '7'=>array('SAP701'),
            '18'=>array('SAP702','SAP703')
        ));
        define('SAP_IMM_ORDER_DATA_URL', 'http://172.18.1.139:56500/wba/api/OrderUpdateScope?response=immediate');
		define('SYSTEM_INTEGRATION_ROOT',dirname(dirname(ROOT)));
		define('FEATURE_UPLOAD_PATH',APP.'webroot/files/feature_uploads/');	
		define('ORDER_PO_TYPE','ZCCE');	
		define('INSTANCE_TYPE','qa');
		define('EXCEPTION_LOG_URL','http://adaziewbaqa01.cloudapp.net/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/LogException');
		define('EXCEPTION_RETREVAL_URL','http://adaziewbaqa01.cloudapp.net/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/ReadExceptionLogs');	
		define('CRYSTAL_MARTIN', 43984);	
define('SHARED_BACKEND_FAILED_FOLDER',TMP . 'backend_uploads/failed_files/');

//Changes for Old SFTP server		
define('SHARED_SFTP_FAILED_FOLDER',SYSTEM_INTEGRATION_ROOT.'ftproot/Coats/customer_sftp/failed_files');
define('SFTP_PROCESSING_SERVER','_OldSFTP');
define('NEW_SFTP_HOST','');
define('NEW_SFTP_ADMIN_USER','');
define('NEW_SFTP_ADMIN_PWD','');
define('NEW_SFTP_UNPROCESSED_FILES','');
define('NEW_SFTP_FAILED_FILES','');
//Changes for Old SFTP server
		//define('STUCKFILE_NOTIFICATION_TEAM','Balakrishnan.R@coats.com,Muthuselvam.M@coats.com,kamlesh.patidar@igate.com,Prafull.Patil@igate.com,andy.wisaksana@coats.com,david.andal.jaya@coats.com,linjith.np@coats.com');
		define('STUCKFILE_NOTIFICATION_TEAM','Balakrishnan.R@coats.com,Muthuselvam.M@coats.com,kamlesh.patidar@igate.com,Prafull.Patil@igate.com,linjith.np@coats.com');
		define('GA_TRAKING_ID','UA-59074105-2');
define('TM_CONTAINER_ID','GTM-TMNQTW');
define('HJ_ID','135156');
define('HJ_SV','5');	
define('NEWRELIC_ID','10740886');
        break;

    default:
        define('SAMPLE_ORDER_NO_START', 10000000);
        define('BULK_ORDER_NO_START', 5000000);
        //colin suggetion	 
	     define('SAP_URL','http://172.18.1.129:55500/WebServicePortal/execute?service=InboundSalesOrderIdoc&template=CCEversion05');
        define('SAP_ATP_URL', 'http://172.18.1.129:55500/wba/api/Atpcheck');
		define('SAP_PRICE_CHECK_URL', 'http://172.18.1.139:56500/wba/api/Netprice');  //colin change replaced on sept 28
        define('LRM_WSDL','http://172.18.2.201/LabRequestInterfaceQA/wcfLabRequest.cLabRequestService.svc?wsdl');
        define('SMS_OUTWARD_API_URL', 'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0');
        define('SMS_OUTWARD_API_DEST', 'pno');
        define('SMS_OUTWARD_API_MSG', 'msgtxt');
        define('SMS_INWARD_API_PREFIX', 'Coats WCS');
        define('SMS_INWARD_API_SENDER', 'send');
        define('SMS_INWARD_API_DEST', 'dest');
        define('SMS_INWARD_API_MSG', 'msg');
        define('SMS_FORWARD_URL', 'http://sms.coats.com/Gateway/RMessage.asp?send=%s&dest=%s&msg=%s');
        define('CC_REPORT_SCOPE_URL', 'http://172.18.1.139:56500/wba/api/ReportScope');
        define('CC_REPORT_INVOICE_URL', 'http://172.18.1.139:56500/wba/api/OpenClosedInvoiceReport');
        define('CC_REPORT_DELIVERY_NOTE_URL', 'http://172.18.1.139:56500/wba/api/DeliveryReport');
        define('CC_REPORT_PURCHASE_SUMMARY_URL', 'http://172.18.1.139:56500/wba/api/PurchasesReport');
        define('CC_REPORT_OUTSTANDING_PAYMENT_URL', 'http://172.18.1.139:56500/wba/api/OutstandingPaymentsReport');
        define('DOMAIN_URL','qawcs.coatscolourexpress.com');
        Configure::write('GisIps', array(
            '192.168.0.79',
            '192.168.0.93',
            '192.168.0.111',
        ));       
        
        define('SAP_ORDER_SCOPE_URL', 'http://172.18.1.129:55500/wba/api/OrderUpdateScope');
		define('SAP_ORDER_DATA_URL', 'http://172.18.1.139:56500/wba/api/OrderUpdateInfo');
        Configure::write('SapClientGMT', array(
            // date('H') => SAP Instance
            '2'=>array('SAP700'),
            '7'=>array('SAP701'),
            '18'=>array('SAP702','SAP703')
        ));
        define('SAP_IMM_ORDER_DATA_URL', 'http://172.18.1.139:56500/wba/api/OrderUpdateScope?response=immediate');
        define('SAP_MATERIAL_CHECK_URL', 'http://172.18.1.139:56500/wba/api/MaterialStatus');
		define('SYSTEM_INTEGRATION_ROOT',dirname(dirname(ROOT)));
		define('FEATURE_UPLOAD_PATH',APP.'webroot/files/feature_uploads/');	
		define('ORDER_PO_TYPE','ZCCE');	
		define('SHARED_BACKEND_FAILED_FOLDER',TMP . 'backend_uploads/failed_files/');
		define('EXCEPTION_LOG_URL','http://adaziewbaqa01.cloudapp.net/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/LogException');
		define('EXCEPTION_RETREVAL_URL','http://adaziewbaqa01.cloudapp.net/ExceptionHandlingWs/services/ExceptionHandlingSerivceWs/ReadExceptionLogs');

//Changes for Old SFTP server		
define('SHARED_SFTP_FAILED_FOLDER',SYSTEM_INTEGRATION_ROOT.'ftproot/Coats/customer_sftp/failed_files');
define('SFTP_PROCESSING_SERVER','_OldSFTP');
define('NEW_SFTP_HOST','');
define('NEW_SFTP_ADMIN_USER','');
define('NEW_SFTP_ADMIN_PWD','');
define('NEW_SFTP_UNPROCESSED_FILES','');
define('NEW_SFTP_FAILED_FILES','');
//Changes for Old SFTP server	
	
		define('STUCKFILE_NOTIFICATION_TEAM','Balakrishnan.R@coats.com,Muthuselvam.M@coats.com,kamlesh.patidar@igate.com,Prafull.Patil@igate.com,linjith.np@coats.com');
		define('GA_TRAKING_ID','UA-59074105-2');
define('TM_CONTAINER_ID','GTM-TMNQTW');
define('HJ_ID','135156');
define('HJ_SV','5');
        break;
}

Configure::write('SanitizeChars', array(
    '<',
    '>',
    '='
));

define('CCE_TITLE', 'Coats Colour Express');
define('ECOM_TITLE', 'Coats eComm');
define('LIVE_LINK_TITLE', 'Coats Live Link');
define('COATS_TITLE', 'Coats');
define('MAX_TIME_EXCEED_FOR_PHP_EXCEL', 3600);
define('DEFAULT_PLANT_LEAD_TIME', 48);
define('MAX_LINES_TO_EXPORT', 1000);
define('MIN_LINES_TO_EMAIL', 10);
define('EXPORT_MAX_FILE_SIZE', (1.5 * 1024 * 1024));
define('EMPTY_CELL', '--');
define('MINIMUM_INPUT_LENGTH', '{Article : 4, Principal : 1 ,Shade : 3, Order : 1, CusCode : 1,CusName : 1,ShipName : 1,ShipCode : 1,Fce : 1,BulkOrder:1,SampleOrder:1}');
define('EMAIL_EXPORT_MSG', 'This is a system generated email.');
define('EMAIL_FCETASK_MSG','Your thread sample has been despatched and will reach you on %s. To give feedback please %s');
define('GOOGLE_MAP_URL_SENSOR_TRUE','https://maps.googleapis.com/maps/api/js?v=3&sensor=true');
define('GOOGLE_MAP_URL_SENSOR_FALSE','https://maps.googleapis.com/maps/api/js?v=3&sensor=false');
define('MAX_ORDER_LINE', 49); // For Bulk order manual entry
define('STANDARD', 'standard');
//Email
define('ORDER_CANCEL_EMAIL_TO_LAB_MESSAGE','The order %s line %s has been cancelled by Customer %s.');
define('ORDER_CANCEL_EMAIL_TO_LAB_SUBJECT','Coats - Order Canceled');
//Cookie
define('COOKIE_TIME','+2weeks');
define('COOKIE_NAME','User');

//Sms
//CakePlugin::load('DebugKit');


// SMS Keywords, that should prefixed with any SMS received in WBA to process; Case in-sensitive
//Configure::write('sms_keywords' ,array('Coats', 'WCS'));



// ************ //
// Inward SMS   //
// ************ //
Configure::write('sms_inward_api',array(
	'default'=>array(
		'keyword_sender'=>'send',
		'keyword_destination'=>'dest',
		'keyword_message'=>'msg',
	),));
//$config['sms_inward_api'] = array(
//	'default'=>array(
//		'keyword_sender'=>'send',
//		'keyword_destination'=>'dest',
//		'keyword_message'=>'msg',
//	),
//);

// Order Status Inward SMS

define('SMS_KEYWORD_ORDER_STAT', 'ordstat');

define('SMS_KEYWORD_ORDER_STAT_ACK_CONT','ordstat');

// FCR Request Inward SMS

define('SMS_KEYWORD_FCR_REQUEST','fcrreq');

define('SMS_KEYWORD_FCR_REQUEST_ACK_CONT','fcrreq');

// Feedback Inward SMS

define('SMS_KEYWORD_FEEDBACK','feedback');

define('SMS_KEYWORD_FEEDBACK_ACK_CONT','feedback');

define('SMS_KEYWORD_FEEDBACK_ACCEPTED','1');

define('SMS_KEYWORD_FEEDBACK_REJECTED','0');

// ************ //
// Outward SMS  //
// ************ //
Configure::write('sms_outward_api',array(
	'default'=>array(
		'url'=>'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0',
		'keyword_destination'=>'pno',
		'keyword_message'=>'msgtxt',
	),));
//$config['sms_outward_api'] = array(
//	'default'=>array(
//		'url'=>'http://203.122.58.168/prepaidgetbroadcast/PrepaidGetBroadcast?userid=coatsplc&pwd=coatsplc123&msgtype=s&ctype=1&sender=CoatsWCS&alert=0',
//		'keyword_destination'=>'pno',
//		'keyword_message'=>'msgtxt',
//	),
//	// Key should be Country code without '+'
//);

// SMS Contents

define('SMS_CONT_ORDER_SUBMIT_ACK',"Thank you for your request. A Field Colour Expert will be visiting you to address your sampling requirements.");
define('SMS_CONT_ORDER_LINE_DESPATCH',"Your thread sample has been despatched and will reach you on %s.");
define('SMS_CONT_FCE_TO_ATTEND_ORDER','Customer %s has a sampling request that requires enrichment');
define('SMS_CONT_ORDER_STATUS',"Your order number %s line %s is currently in %s");
define('SMS_CONT_REQUEST_FEEDBACK',"Your sample thread order no: %s line %s has been delivered. Please respond this text message with 1 if you accept the colour and quality and will use it for your sampling process OR 0 if you are rejecting the submit.");
define('SMS_CONT_FCE_REQUEST',"Customer %s has a sampling request that requires visit and enrichment.");
define('SUPERADMIN', 1);
