<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 20.05.2016
 * Time: 16:15
 */

namespace App\Controller;

use App\Services\Cake2Bootstrapper;

class ProxyController extends AppController
{
    public function reroute()
    {
        $this->viewBuilder()->layout('empty');
        $this->set('content_for_layout', Cake2Bootstrapper::run(['layout' => false]));
    }
}