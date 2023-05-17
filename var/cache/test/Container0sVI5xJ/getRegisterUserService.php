<?php

namespace Container0sVI5xJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterUserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\User\Service\RegisterUser' shared autowired service.
     *
     * @return \App\User\Service\RegisterUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/User/Service/RegisterUser.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\User\\Service\\RegisterUser'])) {
            return $container->privates['App\\User\\Service\\RegisterUser'];
        }

        return $container->privates['App\\User\\Service\\RegisterUser'] = new \App\User\Service\RegisterUser($a, ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
