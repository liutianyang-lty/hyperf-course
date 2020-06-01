<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/6/1
 * Time: 15:03
 */

namespace App\Controller;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Coroutine;
use Swoole\Coroutine\Channel;

/**
 * Class Co3Controller
 * @AutoController()
 */
class Co3Controller
{
    /**
     * @Inject()
     * @var \Hyperf\Guzzle\ClientFactory //用来创建一个http客户端
     */
    private $clientFactory;

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
        //使用协程并行的请求sleep()方法
        $channel = new Channel();
        var_dump(1);
        co(function () use ($channel) {
            $client = $this->clientFactory->create();
            var_dump(2);
            $client->get('127.0.0.1:9501/co3/sleep?seconds=2');
            var_dump(3);
            $channel->push(123);
        });
        var_dump(4);
        co(function () use ($channel) {
            $client = $this->clientFactory->create();
            var_dump(5);
            $client->get('127.0.0.1:9501/co3/sleep?seconds=2');
            var_dump(6);
            $channel->push(321);
        });
        var_dump(7);
        $result[] = $channel->pop();
        $result[] = $channel->pop();
        return $result;

        //不使用协程的情况下请求sleep()方法
//        $client = $this->clientFactory->create();
//        $client->get('127.0.0.1:9501/co3/sleep?seconds=2');
//        $client = $this->clientFactory->create();
//        $client->get('127.0.0.1:9501/co3/sleep?seconds=2');
//        return 1;
    }
}