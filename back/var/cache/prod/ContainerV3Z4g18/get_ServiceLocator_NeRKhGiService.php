<?php

namespace ContainerV3Z4g18;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NeRKhGiService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.neRKhGi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.neRKhGi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['privates', '.errored.qkC9svW', NULL, 'Cannot determine controller argument for "App\\Controller\\TestController::index()": the $em argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
            'request' => ['privates', '.errored.sPEJx5d', NULL, 'Cannot determine controller argument for "App\\Controller\\TestController::index()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'em' => '?',
            'request' => '?',
        ]);
    }
}
