<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  : 
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use PHPUnit\Framework\TestCase;
use App\App\Demo;
use App\Service\AppLogger;
use App\Util\HttpRequest;

class DemoTest extends TestCase {

    public function test_get_user_info() {
        $logger = new AppLogger("App\\Util\\Loggers\\Log4php");
        $req = new HttpRequest;
        $Demo = new Demo($logger->getLogger(), $req);
        $result = $Demo->get_user_info();
        $this->assertNotNull($result);
    }
}