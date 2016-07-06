<?php

namespace App\Services\Network;

use Cake\Network\Response;

class ResponseCake2 extends \CakeResponse
{
    /**
     * Build a cake3 instance of cake3 with data gathered from cake2
     *
     * @return \Cake\Network\Http\Response
     */
    public function getCake3Response() {
        $response = new ResponseCake3();

        $response->statusCode($this->_status);
        $response->header($this->_headers);

        $cookies = $this->_cookies;
        foreach ($cookies as $name => $cookie) {
            $response->cookie($cookie);
        }
        $response->setFile($this->_file);

        $response->body($this->_body);

        return $response;
    }
}