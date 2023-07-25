<?php

namespace ContainerM99QE2T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreatePostCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.App\Post\Command\CreatePostCommand' shared autowired service.
     *
     * @return \App\Post\Command\CreatePostCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Post/Command/CreatePostCommand.php';

        return $container->services['console.command.public_alias.App\\Post\\Command\\CreatePostCommand'] = new \App\Post\Command\CreatePostCommand(($container->privates['App\\Post\\Service\\CreatePost'] ?? $container->load('getCreatePostService')));
    }
}