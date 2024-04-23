<?php

namespace ContainerV3Z4g18;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLookupControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\LookupController' shared autowired service.
     *
     * @return \App\Controller\LookupController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\LookupController'] = $instance = new \App\Controller\LookupController(($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LookupController', $container));

        return $instance;
    }
}