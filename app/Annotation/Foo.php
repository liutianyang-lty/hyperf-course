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
    /**
     * @var string
     */
    public $bar;
}