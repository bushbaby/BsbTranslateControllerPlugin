<?php

namespace BsbTranslateControllerPlugin\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\I18n\Translator\Translator;

final class TranslatePlural extends AbstractPlugin
{
    /**
     * @var \Zend\I18n\Translator\Translator
     */
    private $translator;

    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    /**
     * Translate a plural message
     *
     * @param  string $singular
     * @param  string $plural
     * @param  int    $number
     * @param  string $textDomain
     * @param  string $locale
     * @return string
     */
    public function __invoke($singular, $plural, $number, $textDomain = 'default', $locale = null)
    {
        return $this->translator->translatePlural($singular, $plural, $number, $textDomain, $locale);
    }

    public function __call($method, $args)
    {
        return call_user_func_array(array($this->translator, $method), $args);
    }
}
