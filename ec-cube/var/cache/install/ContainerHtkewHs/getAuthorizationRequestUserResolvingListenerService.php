<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\EventListener\AuthorizationRequestUserResolvingListener' shared service.

include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/EventListener/AuthorizationRequestUserResolvingListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Security.php';

return $this->privates['Trikoder\\Bundle\\OAuth2Bundle\\EventListener\\AuthorizationRequestUserResolvingListener'] = new \Trikoder\Bundle\OAuth2Bundle\EventListener\AuthorizationRequestUserResolvingListener(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
], [
    'security.authorization_checker' => '?',
    'security.token_storage' => '?',
])));
