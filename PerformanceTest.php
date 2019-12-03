<?php
/**
 * Dida Framework  -- PHP轻量级快速开发框架
 * 版权所有 (c) 上海宙品信息科技有限公司
 *
 * 官网: <https://github.com/zeupin/dida>
 * Gitee: <https://gitee.com/zeupin/dida>
 */
$test_start = microtime();
require __DIR__ . "/_bootstrap.php";

use \Dida\Performance;

test_section("memoryUsage()");
$a = Performance::memoryUsage();
var_dump($a);

test_section("readableInterval()");

var_dump(Performance::readableInterval(8640000 + 200000));

var_dump(Performance::readableInterval(8640000)); // 100天
var_dump(Performance::readableInterval(8640000 - 1)); // 100天以内
var_dump(Performance::readableInterval(8640000 - 170000));

var_dump(Performance::readableInterval(864000)); // 10天
var_dump(Performance::readableInterval(86400 * 9)); // 9天
var_dump(Performance::readableInterval(86400 * 9 + 1)); // 9天 + 1秒
var_dump(Performance::readableInterval(86400 * 9 - 1)); // 9天 - 1秒
var_dump(Performance::readableInterval(86400)); // 1天
var_dump(Performance::readableInterval(86400 + 1)); // 1天 + 1秒
var_dump(Performance::readableInterval(86400 - 1)); // 1天 - 1秒

var_dump(Performance::readableInterval(3600)); // 1小时
var_dump(Performance::readableInterval(3600 + 1)); // 1小时
var_dump(Performance::readableInterval(3600 - 1)); // 1小时

var_dump(Performance::readableInterval(120)); // 2分钟
var_dump(Performance::readableInterval(120 + 1)); // 2分钟+1秒
var_dump(Performance::readableInterval(120 - 1)); // 2分钟-1秒
var_dump(Performance::readableInterval(120.0)); // 2分钟
var_dump(Performance::readableInterval(120.1)); // 2分钟

var_dump(Performance::readableInterval(60)); // 1分钟
var_dump(Performance::readableInterval(60 + 1)); // 1分钟+1秒
var_dump(Performance::readableInterval(60 - 1)); // 1分钟-1秒
var_dump(Performance::readableInterval(61.0)); // 61秒
var_dump(Performance::readableInterval(60.0)); // 60秒

var_dump(Performance::readableInterval(60.1)); // 1小时
var_dump(Performance::readableInterval(59.999)); // 1小时
var_dump(Performance::readableInterval(59.999563)); // 1小时

var_dump(Performance::readableInterval(0.1)); // 0.1秒
var_dump(Performance::readableInterval(0.1234567)); // 0.1234567秒
var_dump(Performance::readableInterval(0.1235)); // 0.123秒 四舍五入

var_dump(Performance::readableInterval(0.000999)); // 999微秒
var_dump(Performance::readableInterval(0.0009995)); // 999微秒
echo ">\n";

$test_end = microtime();
$test_interval = Performance::diffMicroTime($test_start, $test_end);
echo "\n本次测试共耗时：" . Performance::readableInterval($test_interval);
