<?php

namespace BsbTranslateControllerPlugin\Controller\Plugin\Service;

use BsbTranslateControllerPlugin\Controller\Plugin\TranslatePlural;
use Zend\I18n\Translator\TranslatorServiceFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class TranslatePluralFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $serviceLocator = $serviceLocator->getController()->getServiceLocator();

        if ($serviceLocator->has('MvcTranslator')) {
            $translator = $serviceLocator->get('MvcTranslator');
        } else {
            $serviceFactory = new TranslatorServiceFactory();
            $translator     = $serviceFactory->createService($serviceLocator);
        }

        return new TranslatePlural($translator);
    }
}
