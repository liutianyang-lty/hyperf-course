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
/**
 * @AutoController()
 * @Foo(bar="123", baz="321") //给注解传递参数
 */
class IndexController
{
    public function index()
    {
        var_dump(AnnotationCollector::getClassByAnnotation(Foo::class)); //获取定义的注解和具体属性
        return 3;
    }
}