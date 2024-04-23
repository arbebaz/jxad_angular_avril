<?php

namespace ContainerV3Z4g18;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EfuNl9hService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.EfuNl9h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EfuNl9h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'user' => ['privates', '.errored..service_locator.EfuNl9h.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.EfuNl9h": it references class "App\\Entity\\User" but no such service exists.'],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'manager' => '?',
            'user' => 'App\\Entity\\User',
            'userPasswordHasher' => '?',
        ]);
    }
}
