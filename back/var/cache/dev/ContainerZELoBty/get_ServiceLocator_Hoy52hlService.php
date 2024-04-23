<?php

namespace ContainerZELoBty;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hoy52hlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hoy52hl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hoy52hl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', true],
            'produits' => ['privates', '.errored..service_locator.hoy52hl.App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.hoy52hl": it references class "App\\Entity\\Produits" but no such service exists.'],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'produits' => 'App\\Entity\\Produits',
        ]);
    }
}
