<?php

namespace ContainerV3Z4g18;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_SendmailService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['mailer.transport_factory.sendmail'])) {
            return $container->privates['mailer.transport_factory.sendmail'];
        }

        return $container->privates['mailer.transport_factory.sendmail'] = new \Symfony\Component\Mailer\Transport\SendmailTransportFactory($a, ($container->privates['http_client'] ?? $container->load('getHttpClientService')), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
