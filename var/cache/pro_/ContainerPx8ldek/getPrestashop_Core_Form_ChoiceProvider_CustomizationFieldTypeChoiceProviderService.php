<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.customization_field_type_choice_provider' shared service.

return $this->services['prestashop.core.form.choice_provider.customization_field_type_choice_provider'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CustomizationFieldTypeChoiceProvider(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
