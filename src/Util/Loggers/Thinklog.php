<?php

namespace  App\Util\Loggers;

use think\facade\Log;

class Thinklog implements LoggerInterface
{
    private $logger;

    public function __construct($config = [])
    {
        if(empty($config)) {
            $config = [
                'default'	=>	'file',
                'channels'	=>	[
                    'file'	=>	[
                        'type'	=>	'file',
                        'path'	=>	'./logs/',
                    ],
                ],
            ];
        }
        $this->logger = new Log();
        $this->logger::init($config);
    }

    public function info($message = '')
    {
        $message = strtoupper($message);
        $this->logger::info($message);
    }

    public function debug($message = '')
    {
        $message = strtoupper($message);
        $this->logger::debug($message);
    }

    public function error($message = '')
    {
        $message = strtoupper($message);
        $this->logger->error($message);
    }
}