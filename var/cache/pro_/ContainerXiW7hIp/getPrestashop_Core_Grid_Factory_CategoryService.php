<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.category' shared service.

return $this->services['prestashop.core.grid.factory.category'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.category'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_CategoryService.php')), ($this->services['prestashop.core.grid.data.factory.category_decorator'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_CategoryDecoratorService.php')), ($this->services['prestashop.core.grid.filter.category_form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_CategoryFormFactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()));
