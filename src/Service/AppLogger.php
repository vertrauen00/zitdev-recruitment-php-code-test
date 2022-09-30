<?php

namespace App\Service;

use App\Util\Loggers\LoggerInterface;

class AppLogger
{
    /**
     * @var  $logger LoggerInterface
     */
    private $logger;

    public function __construct($logger)
    {
        $this->logger = new $logger;
    }
    public function getLogger()
    {
        return $this->logger;
    }

}