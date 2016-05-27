<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 26.05.2016
 * Time: 16:26
 */

namespace App\Controller;


use App\Services\ModelProxy;

class PagesController extends AppController
{
    public function test()
    {
        ModelProxy::test();
        die();
    }
}