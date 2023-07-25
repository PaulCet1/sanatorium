<?php

namespace ContainerRLPT6wS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ggn8TNtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ggn8TNt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ggn8TNt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Post\\Controller\\PostController::create' => ['privates', '.service_locator.2oDrhGf', 'get_ServiceLocator_2oDrhGfService', true],
            'App\\User\\Controller\\AuthController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\User\\Controller\\AuthController::logout' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\User\\Controller\\AuthController::registration' => ['privates', '.service_locator.Doi8Ci_', 'get_ServiceLocator_Doi8CiService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Post\\Controller\\PostController:create' => ['privates', '.service_locator.2oDrhGf', 'get_ServiceLocator_2oDrhGfService', true],
            'App\\User\\Controller\\AuthController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\User\\Controller\\AuthController:logout' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\User\\Controller\\AuthController:registration' => ['privates', '.service_locator.Doi8Ci_', 'get_ServiceLocator_Doi8CiService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Post\\Controller\\PostController::create' => '?',
            'App\\User\\Controller\\AuthController::login' => '?',
            'App\\User\\Controller\\AuthController::logout' => '?',
            'App\\User\\Controller\\AuthController::registration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Post\\Controller\\PostController:create' => '?',
            'App\\User\\Controller\\AuthController:login' => '?',
            'App\\User\\Controller\\AuthController:logout' => '?',
            'App\\User\\Controller\\AuthController:registration' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
