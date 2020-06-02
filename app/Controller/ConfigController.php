<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/6/2
 * Time: 10:01
 */

namespace App\Controller;
use Hyperf\Config\Annotation\Value;
use Hyperf\Contract\ConfigInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * Class ConfigController
 * @AutoController()
 */
class ConfigController
{
    /**
     * //通过依赖注入的方式获取配置
     * @Inject()
     * @var ConfigInterface
     */
    private $config;

    /**
     * 通过Value注解获取配置内容
     * @Value("foo.bar")
     */
    private $bar;

    public function inject()
    {
        //通过依赖注入的方式获取config.php文件中的配置内容
        return $this->config->get('foo.bar', 123);
    }

    public function inject_1()
    {
        //通过依赖注入的方式获取autoload目录下配置文件中的内容
        return $this->config->get('foo.bar', 123);
    }

    public function value()
    {
        return $this->bar;
    }
}