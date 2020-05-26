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
    private $foo = 1;

    public function get()
    {
        return Context::get('foo', 'null');
    }

    public function update(RequestInterface $request)
    {
        $foo = $request->input("foo");
        Context::set('foo', $foo);
        //$this->foo = $foo;
        return Context::get('foo');
    }
}