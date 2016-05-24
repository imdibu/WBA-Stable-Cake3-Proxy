<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 13.05.2016
 * Time: 18:18
 */

namespace App\Services;

use CDispatcher;
use CakeRequest;
use CakeResponse;
use CConfigure;


class Cake2Bootstrapper
{
    public static function run(array $additional = [])
    {
        ob_start();
        $Dispatcher = new CDispatcher();
        $Dispatcher->dispatch(new CakeRequest(), new CakeResponse(array('charset' => CConfigure::read('App.encoding'))), $additional);
        return ob_get_clean();
    }
}