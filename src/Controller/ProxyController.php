<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 20.05.2016
 * Time: 16:15
 */

namespace App\Controller;

use App\Services\Network\ResponseCake2;
use Cake\Network\Response;

class ProxyController extends AppController
{
    public function reroute()
    {
        $request = new \CakeRequest();
        // Fool cake2 in not returning the content for
        $request->params['return'] = '';

        $response = new ResponseCake2(array('charset' => \CConfigure::read('App.encoding')));

        // Dispatch request
        $Dispatcher = new \CDispatcher();
        $Dispatcher->dispatch($request, $response);

        // Process after dispatch
        $afterEvent = new \CakeEvent('CDispatcher.afterDispatch', $this, compact('request', 'response'));
        $Dispatcher->getEventManager()->dispatch($afterEvent);

        return $response->getCake3Response();
    }
}