<?php

namespace ContainerSNSy2vv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TWanN1JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TWanN1J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TWanN1J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'escapeGame' => ['privates', '.errored..service_locator.TWanN1J.App\\Entity\\EscapeGame', NULL, 'Cannot autowire service ".service_locator.TWanN1J": it references class "App\\Entity\\EscapeGame" but no such service exists.'],
        ], [
            'escapeGame' => 'App\\Entity\\EscapeGame',
        ]);
    }
}
