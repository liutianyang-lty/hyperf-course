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
 * @Foo(bar="123") //给注解传递参数
 * @Middlewares(
 *     @Middleware(FooMiddleware::class),
 *     @Middleware(BarMiddleware::class),
 *     @Middleware(BazMiddleware::class)
 * )
 */
class IndexController
{
    public function index()
    {
//        var_dump(AnnotationCollector::getClassByAnnotation(Foo::class)); //获取定义的注解和具体属性
//        return 3;
        return 'index';
    }
}