<?php

namespace Container6UHEzgx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Core\Controller\HomeController' shared autowired service.
     *
     * @return \App\Core\Controller\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Controller/HomeController.php';

        $container->services['App\\Core\\Controller\\HomeController'] = $instance = new \App\Core\Controller\HomeController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Core\\Controller\\HomeController', $container));

        return $instance;
    }
}
