<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/5/25
 * Time: 17:46
 */

namespace App\Controller;

use App\Annotation\Foo;
use Hyperf\Di\Annotation\AnnotationCollector;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Middleware\FooMiddleware;
use App\Middleware\BarMiddleware;
use App\Middleware\BazMiddleware;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\Middlewares;

/**
 * @AutoController()
 * //在类上定义使用中间件(当类和方法上都有中间件时，会先执行类上的中间件；当有全局中间件时，会先执行全局中间件)
 * @Middlewares(
 *     @Middleware(BarMiddleware::class),
 *     @Middleware(BazMiddleware::class)
 * )
 */
class IndexController
{
//    /**
//     * //在方法上定义中间件
//     * @Middleware(FooMiddleware::class)
//     */
//    public function index()
//    {
//        //var_dump(AnnotationCollector::getClassByAnnotation(Foo::class)); //获取定义的注解和具体属性
//        //return 3;
//        return 'index';
//    }

    public function index()
    {
        return 'index';
    }
}