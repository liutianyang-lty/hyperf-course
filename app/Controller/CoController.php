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

/**
 * @AutoController()
 */
class CoController
{
    private $foo = 1;

    public function get()
    {
        return $this->foo;
    }

    public function update(RequestInterface $request)
    {
        $foo = $request->input("foo");
        $this->foo = $foo;
        return $this->foo;
    }
}