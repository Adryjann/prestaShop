<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.

return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->load('getPsxmarketingwithgoogle_DbService.php')) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->load('getPsxmarketingwithgoogle_ContextService.php')) && false ?: '_'});
