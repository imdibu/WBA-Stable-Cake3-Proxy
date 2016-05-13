<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'Users', 'action' => 'login'));
Router::connect('/login', array('controller' => 'Users', 'action' => 'login'));
Router::connect('/login/maintenance', array('controller' => 'Users', 'action' => 'login', 'maintenance'));
Router::connect('/forgotpassword', array('controller' => 'Users', 'action' => 'forgotpassword'));
Router::connect('/logout', array('controller' => 'Users', 'action' => 'logout'));
Router::connect('/profile/*', array('controller' => 'Users', 'action' => 'profile'));

Router::connect('/cce/prompt/*', array('controller' => 'SampleOrders', 'action' => 'prompt'));
Router::connect('/cce/create/*', array('controller' => 'SampleOrders', 'action' => 'add'));
Router::connect('/cce/drafts/*', array('controller' => 'SampleOrders', 'action' => 'drafts'));
Router::connect('/cce/outstanding/*', array('controller' => 'SampleOrders', 'action' => 'outstanding'));
Router::connect('/cce/view/*', array('controller' => 'SampleOrders', 'action' => 'viewOrder'));
Router::connect('/cce/cancel/*', array('controller' => 'SampleOrders', 'action' => 'cancelOrderLine'));
Router::connect('/cce/enrich/*', array('controller' => 'SampleOrders', 'action' => 'enrich'));
Router::connect('/cce/hub/sos/*', array('controller' => 'SampleOrders', 'action' => 'hubSos'));
Router::connect('/cce/hub/received/*', array('controller' => 'SampleOrders', 'action' => 'receivedHub'));
Router::connect('/cce/inbox/sap/*', array('controller' => 'SampleOrders', 'action' => 'inboxSap'));
Router::connect('/cce/inbox/*', array('controller' => 'SampleOrders', 'action' => 'inbox'));
Router::connect('/cce/production/*', array('controller' => 'SampleOrders', 'action' => 'confirmProduction'));

Router::connect('/cce/sampleupload/*', array('controller' => 'SampleOrders', 'action' => 'import'));
Router::connect('/cce/error/realuploadlog/*', array('controller' => 'SampleErrorLogs', 'action' => 'realErrorLog'));


Router::connect('/cce/deliverynotes/*', array('controller' => 'SampleOrders', 'action' => 'deliveryNotes'));
Router::connect('/cce/cabinet/refill/*', array('controller' => 'SampleOrders', 'action' => 'refillCabinet'));

Router::connect('/cce/feedback/awaiting/*', array('controller' => 'SampleOrders', 'action' => 'feedbackAwaiting'));
Router::connect('/cce/feedback/completed/*', array('controller' => 'SampleOrders', 'action' => 'feedbackCompleted'));
Router::connect('/cce/feedback/*', array('controller' => 'SampleOrders', 'action' => 'feedback'));

Router::connect('/reports/fce/taskstatus/*', array('controller' => 'FceTasks', 'action' => 'taskStatusReport'));
Router::connect('/reports/cce/ordercycletime/*', array('controller' => 'SampleOrderLines', 'action' => 'cycleTimeReport'));
Router::connect('/reports/cce/totalorders/*', array('controller' => 'SampleOrderLines', 'action' => 'totalOrderReport'));

Router::connect('/fce/tasklist/completed/*', array('controller' => 'FceTasks', 'action' => 'taskList', 'completed'));
Router::connect('/fce/tasklist/*', array('controller' => 'FceTasks', 'action' => 'taskList'));
Router::connect('/fce/request', array('controller' => 'FceTasks', 'action' => 'request'));

Router::connect('/cce/lrm/log/*', array('controller' => 'SampleOrderLines', 'action' => 'lrmLog'));
Router::connect('/cce/lrm/resend/*', array('controller' => 'SampleOrders', 'action' => 'resendLRM'));
Router::connect('/cce/sap/log/*', array('controller' => 'SampleOrderLines', 'action' => 'sapLog'));
Router::connect('/ecom/inprocess/file/*', array('controller' => 'InProcessFiles', 'action' => 'showlist'));
//Router::connect('/archives/*', array('controller' => 'Archives', 'action' => 'archives'));

Router::connect('/min-css/*', array('controller' => 'Minify', 'action' => 'minifyCss'));
Router::connect('/min-js/*', array('controller' => 'Minify', 'action' => 'minifyJs'));

Router::connect('/sap/gis_order_response', array('controller' => 'Inward', 'action' => 'parseGisOrderResponse'));
Router::connect('/sap/gis_ship_notice', array('controller' => 'Inward', 'action' => 'parseGisShipNotice'));

Router::connect('/ecom/order/manual/*', array('controller' => 'BulkOrders', 'action' => 'ordermanual'));
Router::connect('/ecom/order/upload/*', array('controller' => 'BulkOrders', 'action' => 'import'));
Router::connect('/ecom/order/sample/list/*', array('controller' => 'BulkOrders', 'action' => 'sampleList'));
Router::connect('/ecom/order/sample/*', array('controller' => 'BulkOrders', 'action' => 'sample'));
Router::connect('/ecom/order/ecom/list/*', array('controller' => 'BulkOrders', 'action' => 'ecomList'));
Router::connect('/ecom/order/ecom/*', array('controller' => 'BulkOrders', 'action' => 'ecom'));
Router::connect('/ecom/order/confirm/*', array('controller' => 'BulkOrders', 'action' => 'orderConfirm'));
Router::connect('/ecom/order/waitingforshade/*', array('controller' => 'Waitingforshades', 'action' => 'waitingforshades_list'));
Router::connect('/ecom/order/shadenotavailable/*', array('controller' => 'Shadenotavailables', 'action' => 'shadenotavailable_list'));

Router::connect('/ecom/outstanding/*', array('controller' => 'BulkOrders', 'action' => 'outstandingOrder'));
Router::connect('/ecom/drafts/upload/*', array('controller' => 'BulkOrders', 'action' => 'draftsUpload'));
Router::connect('/ecom/drafts/*', array('controller' => 'BulkOrders', 'action' => 'drafts'));
Router::connect('/ecom/courier/*', array('controller' => 'BulkOrders', 'action' => 'courier'));
Router::connect('/ecom/approveorder/*', array('controller' => 'ApprovalOrders', 'action' => 'index'));
Router::connect('/ecom/approvalhistory/*', array('controller' => 'ApprovalOrders', 'action' => 'approvalhistory'));
Router::connect('/ecom/deniedorder/*', array('controller' => 'ApprovalOrders', 'action' => 'deniedorder'));

Router::connect('/ecom/sap/log/*', array('controller' => 'BulkOrderLines', 'action' => 'sapLog'));
Router::connect('/ecom/pac/*', array('controller' => 'BulkOrders', 'action' => 'productAvailabilityCheck'));
Router::connect('/ecom/error/log/*', array('controller' => 'ErrorLogs', 'action' => 'errorLog'));
Router::connect('/ecom/ftpfailure/log/*', array('controller' => 'IntegrationErrorLogs', 'action' => 'showinerrorlist'));
Router::connect('/ecom/error/realuploadlog/*', array('controller' => 'ErrorLogs', 'action' => 'realErrorLog'));
Router::connect('/ecom/order/immediateorderupdate/*', array('controller' => 'ImmediateOrderUpdates', 'action' => 'immediateorderupdate_list'));
Router::connect('/ecom/order/failedcontract/*', array('controller' => 'FailedContracts', 'action' => 'failedContract_list'));
//added below for T&C//
Router::connect('/ecom/tcreport/*', array('controller' => 'TermConditions', 'action' => 'index'));

Router::connect('/reports/cc/invoices/*', array('controller' => 'CustomerCare', 'action' => 'invoice'));
Router::connect('/reports/cc/deliverynotes/*', array('controller' => 'CustomerCare', 'action' => 'deliverynote'));
Router::connect('/reports/cc/purchases/*', array('controller' => 'CustomerCare', 'action' => 'purchase'));
Router::connect('/reports/cc/payment/*', array('controller' => 'CustomerCare', 'action' => 'payment'));
Router::connect('/reports/cc/myreports/*', array('controller' => 'CustomerCare', 'action' => 'myReports'));
Router::connect('/reports/ecom/totalorders/*', array('controller' => 'CoatsReportVariants', 'action' => 'totalorderReports'));

Router::connect('/ecom/newfeature/*', array('controller' => 'NewFeatures', 'action' => 'feature'));
Router::connect('/cce/newfeature/*', array('controller' => 'NewFeatures', 'action' => 'ccefeature'));

Router::connect('/cce/*', array('controller' => 'Users', 'action' => 'home', 'cce'));
Router::connect('/ecom/*', array('controller' => 'Users', 'action' => 'home', 'ecom'));
Router::connect('/home/*', array('controller' => 'Users', 'action' => 'home'));


//Router::connect('/usertypes', array('controller' => 'UserTypes', 'action'=>'index'));
//Router::connect('/:controller', array('controller' => ':controller', 'action'=>'index'));
//Router::connect('/:controller/:action/*', array('controller' => ':controller', 'action'=>':action'));
//Router::connect('/usertypes/add', array('controller' => 'UserTypes', 'action'=>'add'));

Router::mapResources('api_logs');
Router::parseExtensions();
/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
