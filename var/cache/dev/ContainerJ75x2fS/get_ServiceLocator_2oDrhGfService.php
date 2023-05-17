<?php

namespace ContainerJ75x2fS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2oDrhGfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2oDrhGf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2oDrhGf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'createPost' => ['privates', 'App\\Post\\Service\\CreatePost', 'getCreatePostService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'createPost' => 'App\\Post\\Service\\CreatePost',
            'entityManager' => '?',
        ]);
    }
}
