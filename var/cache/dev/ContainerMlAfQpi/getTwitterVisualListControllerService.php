<?php

namespace ContainerMlAfQpi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwitterVisualListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\DDD\Twitter\Api\Controller\TwitterVisualListController' shared autowired service.
     *
     * @return \App\DDD\Twitter\Api\Controller\TwitterVisualListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/DDD/Twitter/Api/Controller/TwitterVisualListController.php';

        $container->services['App\\DDD\\Twitter\\Api\\Controller\\TwitterVisualListController'] = $instance = new \App\DDD\Twitter\Api\Controller\TwitterVisualListController(($container->privates['App\\DDD\\Twitter\\Infrastructure\\TwitterConnector'] ?? $container->load('getTwitterConnectorService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\DDD\\Twitter\\Api\\Controller\\TwitterVisualListController', $container));

        return $instance;
    }
}
