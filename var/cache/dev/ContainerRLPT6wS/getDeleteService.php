<?php

namespace ContainerRLPT6wS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Reservation\Controller\Delete' shared autowired service.
     *
     * @return \App\Reservation\Controller\Delete
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Reservation/Controller/Delete.php';

        return $container->services['App\\Reservation\\Controller\\Delete'] = new \App\Reservation\Controller\Delete();
    }
}
