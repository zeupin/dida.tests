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

use \Dida\Config;

DidaTest::section("groupExpand groupPack");

$confA = [
    ''    => 0,
    "a"   => 1,
    "b"   => 2,
    "c.c" => 3,
];

Config::groupExpand("db", $confA);
var_dump(Config::all());

$confB = Config::groupPack("db");
var_dump($confB);

Config::groupClear("db.c");
var_dump(Config::all());

Config::clear();
var_dump(Config::all());