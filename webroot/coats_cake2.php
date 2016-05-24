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

if (!defined('COATS2_APP_DIR')) {
    define('COATS2_APP_DIR', $coats_cake2_config['appDir']);
}

if (!defined('COATS2_WEBROOT_DIR')) {
    define('COATS2_WEBROOT_DIR', $coats_cake2_config['webrootDir']);
}

if (!defined('COATS2_WWW_ROOT')) {
    define('COATS2_WWW_ROOT', dirname(__FILE__) . DS);
}

if (!defined('COATS2_CAKE_CORE_INCLUDE_PATH')) {
    if (!include(COATS2_ROOT . DS . 'lib' . DS . 'Cake' . DS . 'bootstrap.php')) {
        $failed = true;
    }
} else {
    if (!include(COATS2_CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'bootstrap.php')) {
        $failed = true;
    }
}

if (!include(COATS2_CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'Routing' . DS . 'CDispatcher.php')) {
    $failed = true;
}

if (!include(COATS2_CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'Network' . DS . 'CakeRequest.php')) {
    $failed = true;
}

if (!include(COATS2_CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'Network' . DS . 'CakeResponse.php')) {
    $failed = true;
}

if (!empty($failed)) {
    trigger_error("CakePHP core could not be found.  Check the value of COATS2_CAKE_CORE_INCLUDE_PATH in COATS_APP/webroot/index.php.  It should point to the directory containing your " . DS . "cake core directory and your " . DS . "vendors root directory.", E_USER_ERROR);
}

if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == '/favicon.ico') {
    return;
}