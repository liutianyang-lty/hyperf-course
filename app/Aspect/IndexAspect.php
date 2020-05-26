<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/5/26
 * Time: 13:51
 */

namespace App\Aspect;


use App\Annotation\Foo;
use App\Controller\IndexController;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * @Aspect()
 */
class IndexAspect extends AbstractAspect
{
    /**
     * 定义要切入的类或方法
     * $classes 属性
     * @var array
     */
//    public $classes = [
//        IndexController::class . "::" . "index", // 切入IndexController类中的index方法
//        //IndexController::class // 切入IndexController类中的所有方法
//    ];

    /**
     * 切入Foo注解
     * @var array
     */
    public $annotations = [
        Foo::class,
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        //在IndexControlelr中的index方法执行前 写逻辑
        var_dump("before\n");
        // TODO something

        $result = $proceedingJoinPoint->process();

        //在IndexControlelr中的index方法执行后 写逻辑
        // TODO something
        var_dump("after\n");

        //对方法返回结果进行处理
        return "before" . $result . "after";
    }
}