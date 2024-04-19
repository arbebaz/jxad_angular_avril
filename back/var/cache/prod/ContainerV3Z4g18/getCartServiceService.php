<?php

namespace ContainerV3Z4g18;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\CartService' shared autowired service.
     *
     * @return \App\Service\CartService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        if (isset($container->privates['App\\Service\\CartService'])) {
            return $container->privates['App\\Service\\CartService'];
        }

        return $container->privates['App\\Service\\CartService'] = new \App\Service\CartService(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a);
    }
}