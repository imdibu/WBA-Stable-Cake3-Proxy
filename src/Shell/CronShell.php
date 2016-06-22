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
        $binPath = dirname(dirname(__DIR__)) . DS . 'bin' . DS . 'cake.php';
        $appPath = dirname(dirname(__DIR__)) . DS . 'legacy' . DS . 'Project';
        $arguments = func_get_args();

        $defaultArgs = [
            0 => $binPath,
            1 => '-working',
            2 => $appPath
        ];

        \CShellDispatcher::run(array_merge($defaultArgs, $arguments));
    }
}