<?php

namespace ContainerNxoU3gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gt8_Nf1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Gt8.nf1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Gt8.nf1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produits' => ['privates', '.errored..service_locator.Gt8.nf1.App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.Gt8.nf1": it references class "App\\Entity\\Produits" but no such service exists.'],
        ], [
            'manager' => '?',
            'produits' => 'App\\Entity\\Produits',
        ]);
    }
}
