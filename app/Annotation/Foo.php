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
 * @Target({"CLASS", "METHOD"})
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