#!/usr/bin/env php
<?php
//hyperf框架入口文件
ini_set('display_errors', 'on'); // 设置错误显示出来
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL); // 设置错误等级为E_ALL

! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1)); // 定义根目录常量
! defined('SWOOLE_HOOK_FLAGS') && define('SWOOLE_HOOK_FLAGS', SWOOLE_HOOK_ALL);

require BASE_PATH . '/vendor/autoload.php';

// Self-called anonymous function that creates its own scope and keep the global namespace clean.
(function () {
    /** @var \Psr\Container\ContainerInterface $container */
    $container = require BASE_PATH . '/config/container.php';

    $application = $container->get(\Hyperf\Contract\ApplicationInterface::class);
    $application->run();
})();
