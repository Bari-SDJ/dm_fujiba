<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._Z34Oca' shared service.

return $this->privates['.service_locator._Z34Oca'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Product' => ['privates', '.errored..service_locator._Z34Oca.Eccube\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator._Z34Oca": it references class "Eccube\\Entity\\Product" but no such service exists.'],
    'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService.php', true],
], [
    'Product' => 'Eccube\\Entity\\Product',
    'cacheUtil' => 'Eccube\\Util\\CacheUtil',
]);
