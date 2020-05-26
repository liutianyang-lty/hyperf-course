<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/5/25
 * Time: 17:42
 */
namespace App\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;
/**
 * @Annotation
 * @Target({"CLASS", "METHOD"}) // 表示Foo这个注解是 类级别的 还是 方法级别的 或是 类属性级别的
 */
class Foo extends AbstractAnnotation
{
    //自定义注解
    /**
     * @var string
     */
    public $bar;

    /**
     * @var string
     */
    public $baz;

    public function __construct($value = null)
    {
        var_dump($value);
        parent::__construct($value);
    }
}