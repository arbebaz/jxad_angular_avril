<?php

namespace ContainerV3Z4g18;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParolesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ParolesRepository' shared autowired service.
     *
     * @return \App\Repository\ParolesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ParolesRepository'] = new \App\Repository\ParolesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
