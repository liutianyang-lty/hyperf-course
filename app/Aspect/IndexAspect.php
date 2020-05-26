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
        var_dump(__CLASS__);
        // TODO: Implement process() method.
        $result = $proceedingJoinPoint->process();
        return "before" . $result . "after";
    }
}