<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Eccube\Command\UpdateSchemaDoctrineCommand' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/UpdateSchemaDoctrineCommand.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Command/UpdateSchemaDoctrineCommand.php';

return $this->services['console.command.public_alias.Eccube\\Command\\UpdateSchemaDoctrineCommand'] = new \Eccube\Command\UpdateSchemaDoctrineCommand(($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->load('getPluginRepositoryService.php')), ($this->services['Eccube\\Service\\PluginService'] ?? $this->load('getPluginServiceService.php')), ($this->privates['Eccube\\Service\\SchemaService'] ?? $this->load('getSchemaServiceService.php')));
