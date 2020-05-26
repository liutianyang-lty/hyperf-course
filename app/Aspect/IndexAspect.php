<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/5/26
 * Time: 13:51
 */

namespace App\Aspect;


use App\Controller\IndexController;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * @Aspect()
 */
class IndexAspect extends AbstractAspect
{
    //定义要切入的类
    public $classes = [
        IndexController::class . "::" . "index",
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