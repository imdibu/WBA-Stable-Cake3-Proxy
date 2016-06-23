<?php
/**
 * Created by PhpStorm.
 * User: TSC 33L
 * Date: 22.06.2016
 * Time: 10:33
 */

namespace App\Shell;

use Cake\Console\Shell;

class CronShell extends Shell
{
    public function main()
    {
        $arguments = func_get_args();

        $dispatcher = new \CShellDispatcher($arguments, false);
        exit($dispatcher->dispatch() === false ? 1 : 0);
    }
}