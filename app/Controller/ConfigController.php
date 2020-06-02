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
     * @Inject()
     * @var ConfigInterface
     */
    private $config;

    public function inject()
    {
        return $this->config->get('foo.bar', 123);
    }
}