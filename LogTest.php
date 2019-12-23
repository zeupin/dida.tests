<?php

/**
 * Dida Framework  -- PHP轻量级快速开发框架
 * 版权所有 (c) 上海宙品信息科技有限公司
 *
 * 官网: <https://github.com/zeupin/dida>
 * Gitee: <https://gitee.com/zeupin/dida>
 */
use \Dida\Log\Log;
use \Dida\Log\Logger;

$test_start = microtime();
require __DIR__ . "/_bootstrap.php";

DidaTest::section("Log");

$loggerSetting = [
    "classname" => "\Dida\Log\FileLogger",
    "path"      => __DIR__ . "/logs",
];
Log::init($loggerSetting);
Log::emergency("now");
Log::alert("now");
Log::critical("now");
Log::error("now");
Log::warning("now");
Log::notice("now");
Log::info("now");
Log::debug("now");
