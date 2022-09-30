<?php

namespace App\Service;

use App\Util\Loggers\LoggerInterface;

class AppLogger
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function getLogger()
    {
        return $this->logger;
    }

}