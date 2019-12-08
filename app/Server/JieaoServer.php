<?php
/**
 * author: NanQi
 * datetime: 2019/12/8 17:49
 */
declare(strict_types=1);

namespace App\Server;

use PDepend\Util\Log;
use Swoole\Server;

class JieaoServer {

    public function onStart()
    {
        //设置进程名
        cli_set_process_title("ynyn");

        Log::log('onStart:ynyn');
    }

    public function onWorkerStart(Server $serv)
    {
        require BASE_PATH . '/vendor/autoload.php';

//        require BASE_PATH . '/vendor/autoload.php';
        Log::log('onWorkerStart:ynyn');
    }
}