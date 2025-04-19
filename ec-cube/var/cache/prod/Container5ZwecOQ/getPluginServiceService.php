<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Service\PluginService' shared autowired service.

if ($lazyLoad) {
    return $this->services['Eccube\\Service\\PluginService'] = $this->createProxy('PluginService_e75fd88', function () {
        return \PluginService_e75fd88::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getPluginServiceService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Util/CacheUtil.php';

return new \Eccube\Service\PluginService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->load('getPluginRepositoryService.php')), ($this->privates['Eccube\\Service\\EntityProxyService'] ?? $this->load('getEntityProxyServiceService.php')), ($this->privates['Eccube\\Service\\SchemaService'] ?? $this->load('getSchemaServiceService.php')), ($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))), $this, ($this->privates['Eccube\\Util\\CacheUtil'] ?? ($this->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($this->services['kernel'] ?? $this->get('kernel', 1)), $this))), ($this->privates['Eccube\\Service\\Composer\\ComposerServiceInterface'] ?? $this->load('getComposerServiceInterfaceService.php')), ($this->privates['Eccube\\Service\\PluginApiService'] ?? $this->load('getPluginApiServiceService.php')), ($this->services['Eccube\\Service\\SystemService'] ?? $this->load('getSystemServiceService.php')), ($this->privates['Eccube\\Service\\PluginContext'] ?? $this->load('getPluginContextService.php')));
