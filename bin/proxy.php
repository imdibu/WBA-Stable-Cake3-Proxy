<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

$coats_cake2_config = [
    'legacyRoot' => dirname(dirname(__FILE__)) . DS . 'legacy' . DS . 'Project',
    'appDir' => 'app',
    'webrootDir' => 'webroot'
];

if (!defined('COATS2_ROOT')) {
    define('COATS2_ROOT', $coats_cake2_config['legacyRoot']);
}

if (!include(COATS2_ROOT . DS . 'lib' . DS . 'Cake' . DS . 'Console' . DS . 'CShellDispatcher.php')) {
    $failed = true;
}

if (!empty($failed)) {
    trigger_error("CakePHP core could not be found.  Check the value of COATS2_CAKE_CORE_INCLUDE_PATH in COATS_APP/webroot/index.php.  It should point to the directory containing your " . DS . "cake core directory and your " . DS . "vendors root directory.", E_USER_ERROR);
}

if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == '/favicon.ico') {
    return;
}