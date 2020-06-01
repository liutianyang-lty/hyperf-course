<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/6/1
 * Time: 15:03
 */

namespace App\Controller;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Coroutine;

/**
 * Class Co3Controller
 * @AutoController()
 */
class Co3Controller
{

    public function sleep(RequestInterface $request)
    {
        $seconds = $request->query('seconds', 1);
        sleep($seconds);
        return $seconds;
    }

    public function test()
    {
        //Hyperf里创建协程的方式：
        //方式一：使用Coroutine创建, 闭包函数里面就是协程的代码块
//        Coroutine::create(function () {
//            sleep(1);
//            var_dump(1);
//        });

        //方式二：使用go()全局函数创建
//        go(function () {
//            sleep(1);
//            var_dump(1);
//        });

        //方式三：使用co()全局函数创建
        co(function () {
            sleep(1);
            var_dump(1);
        });

    }
}