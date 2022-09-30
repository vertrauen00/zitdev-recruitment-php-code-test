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
        $ThinkLog = new Thinklog();
        $logger = (new AppLogger($ThinkLog))->getLogger();
        $logger->info('This is info log message for think log test');
    }
    public function testLog4php()
    {

        $Log4php = new Log4php();
        $logger = (new AppLogger($Log4php))->getLogger();
        $logger->info('This is info log message for log4php test');
    }
}