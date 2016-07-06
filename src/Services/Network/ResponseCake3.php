<?php

namespace App\Services\Network;

use Cake\Network\Response;

class ResponseCake3 extends Response
{
    /**
     * @param $file
     */
    public function setFile($file)
    {
        $this->_file = $file;
    }
}