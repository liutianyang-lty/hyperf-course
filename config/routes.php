<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;

//Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

//在路由中配置中间件
Router::addGroup('/v2', function () {
    //分组路由
    Router::get('/index', [\App\Controller\IndexController::class, 'index']);
}, ['middleware' => [\App\Middleware\FooMiddleware::class]]);