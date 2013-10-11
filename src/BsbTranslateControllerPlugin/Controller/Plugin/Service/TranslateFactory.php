<?php

namespace BsbTranslateControllerPlugin\Controller\Plugin\Service;

use BsbTranslateControllerPlugin\Controller\Plugin\Translate;
use Zend\I18n\Translator\TranslatorServiceFactory;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class TranslateFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $serviceLocator = $serviceLocator->getController()->getServiceLocator();
        $serviceFactory = new TranslatorServiceFactory();
        $translator = $serviceFactory->createService($serviceLocator);

        return new Translate($translator);
    }
}
