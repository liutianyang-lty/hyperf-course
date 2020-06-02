<?php
/**
 * Created by PhpStorm.
 * User: lyy
 * Date: 2020/6/2
 * Time: 10:01
 */

namespace App\Controller;
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

    public function inject()
    {
        //通过依赖注入的方式获取config.php文件中的配置内容
        return $this->config->get('foo.bar', 123);
    }

    public function inject_1()
    {
        return $this->config->get('foo.bar', 123);
    }
}