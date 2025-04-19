<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.error_listener' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

$a = new \Symfony\Bridge\Monolog\Logger('console');
$a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\SessionProcessor'] ?? $this->getSessionProcessorService()));
$a->pushProcessor(($this->privates['Eccube\\Log\\Processor\\TokenProcessor'] ?? $this->getTokenProcessorService()));
$a->pushProcessor(($this->privates['Monolog\\Processor\\UidProcessor'] ?? ($this->privates['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())));
$a->pushProcessor(($this->privates['Monolog\\Processor\\IntrospectionProcessor'] ?? ($this->privates['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))));
$a->pushProcessor(($this->privates['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] ?? $this->getWebProcessorService()));
$a->pushHandler(($this->privates['monolog.handler.buffered'] ?? $this->getMonolog_Handler_BufferedService()));

return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
