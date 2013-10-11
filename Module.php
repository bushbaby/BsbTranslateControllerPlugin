<?php

namespace BsbTranslateControllerPlugin;

class Module
{
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
