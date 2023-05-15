<?php

namespace ContainerL5SYg5b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Doi8CiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Doi8Ci_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Doi8Ci_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registerUser' => ['privates', 'App\\User\\Service\\RegisterUser', 'getRegisterUserService', true],
        ], [
            'registerUser' => 'App\\User\\Service\\RegisterUser',
        ]);
    }
}
