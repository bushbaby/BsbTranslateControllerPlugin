<?php

namespace BsbTranslateControllerPlugin;

use Zend\ModuleManager\Feature;

class Module implements
    Feature\AutoloaderProviderInterface,
    Feature\ConfigProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        return array(
            'controller_plugins' => array(
                'factories' => array(
                    'translate'       => 'BsbTranslateControllerPlugin\Controller\Plugin\Service\TranslateFactory',
                    'translatePlural' => 'BsbTranslateControllerPlugin\Controller\Plugin\Service\TranslatePluralFactory',
                ),
            ),
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
