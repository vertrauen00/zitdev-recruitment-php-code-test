<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use App\Service\AppLogger;
use App\Util\Loggers\Thinklog;
use App\Util\Loggers\Log4php;

/**
 * Class ProductHandlerTest
 */
class AppLoggerTest extends TestCase
{

    public function testThinkLog()
    {
        $logger = (new AppLogger("App\\Util\\Loggers\\Thinklog"))->getLogger();
        $logger->info('This is info log message for think log test');
    }
    public function testLog4php()
    {
        $logger = (new AppLogger("App\\Util\\Loggers\\Log4php"))->getLogger();
        $logger->info('This is info log message for log4php test');
    }
}