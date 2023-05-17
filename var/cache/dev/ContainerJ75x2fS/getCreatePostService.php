<?php

namespace ContainerJ75x2fS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreatePostService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Post\Service\CreatePost' shared autowired service.
     *
     * @return \App\Post\Service\CreatePost
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Post/Service/CreatePost.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Post\\Service\\CreatePost'])) {
            return $container->privates['App\\Post\\Service\\CreatePost'];
        }

        return $container->privates['App\\Post\\Service\\CreatePost'] = new \App\Post\Service\CreatePost($a);
    }
}
