<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/5/26
 * Time: 15:58
 */

namespace App\Controller;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;

/**
 * @AutoController()
 * @property int $foo
 */
class Co2Controller
{
    /**
     * @Inject()
     * @var \App\Foo
     */
    private $foo;

    public function get()
    {
        //return Context::get('foo', 'null'); // 协程上下文获取 防止协程之间数据混淆
        return $this->foo->bar;
    }

    public function update(RequestInterface $request)
    {
        $foo = $request->input("foo");
        //Context::set('foo', $foo);
        $this->foo->bar = $foo;
        //return Context::get('foo');
        return $this->foo->bar;
    }

}