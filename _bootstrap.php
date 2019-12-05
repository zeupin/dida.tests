<?php
/**
 * Dida Framework  -- PHP轻量级快速开发框架
 * 版权所有 (c) 上海宙品信息科技有限公司
 *
 * 官网: <https://github.com/zeupin/dida>
 * Gitee: <https://gitee.com/zeupin/dida>
 */
require "D:/Projects/github/dida-autoloader/src/Dida/Autoloader.php";
Dida\Autoloader::addPsr4("Dida", "D:/Projects/github/dida/src/Dida");
Dida\Autoloader::addPsr4("Dida", "D:/Projects/github/dida-config--dev/src/Dida");
require __DIR__ . "/DidaTest.php";
