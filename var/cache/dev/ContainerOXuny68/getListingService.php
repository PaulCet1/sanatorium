<?php

namespace ContainerOXuny68;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Reservation\Controller\Listing' shared autowired service.
     *
     * @return \App\Reservation\Controller\Listing
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Reservation/Controller/Listing.php';

        return $container->services['App\\Reservation\\Controller\\Listing'] = new \App\Reservation\Controller\Listing(($container->privates['twig'] ?? $container->getTwigService()));
    }
}
