<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.email.email_configuration_tester' shared service.

return $this->services['prestashop.adapter.email.email_configuration_tester'] = new \PrestaShop\PrestaShop\Adapter\Email\EmailConfigurationTester(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['translator'] ?? $this->getTranslatorService()));