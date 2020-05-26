<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/5/26
 * Time: 15:34
 */

namespace App\Controller;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Context;

/**
 * @AutoController()
 */
class CoController
{
    public function get()
    {
        //return Context::get('foo', 'null'); // 协程上下文获取 防止协程之间数据混淆
        return $this->foo;
    }

    public function update(RequestInterface $request)
    {
        $foo = $request->input("foo");
        //Context::set('foo', $foo);
        $this->foo = $foo;
        //return Context::get('foo');
        return $this->foo;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return Context::get(__CLASS__ . ':' . $name);
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        Context::set(__CLASS__ . ':' . $name, $value);
    }
}