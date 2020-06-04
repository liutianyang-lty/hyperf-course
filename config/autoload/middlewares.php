<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 * 全局中间件配置文件
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

return [
    'http' => [
        \App\Middleware\FooMiddleware::class,
    ],
];
