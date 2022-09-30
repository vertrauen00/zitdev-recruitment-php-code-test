<?php
/**
 * Logger接口
 * LoggerInterface.php
 *
 * functions and purpose for this file
 * @author woolh@foxmail.com
 * @version
 * @time: 2022/9/30 16:06
 */

namespace App\Util\Loggers;

interface LoggerInterface
{
    public function info($message = '');
    public function debug($message = '');
    public function error($message = '');

}