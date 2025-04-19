<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ExceptionListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Security/EntryPoint/OAuth2EntryPoint.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

return $this->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.authentication.listener.oauth2.api'] ?? $this->load('getSecurity_Authentication_Listener_Oauth2_ApiService.php'));
    yield 2 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 3), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'api', new \Trikoder\Bundle\OAuth2Bundle\Security\EntryPoint\OAuth2EntryPoint(), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', '.security.request_matcher.p4VlLPC', true, true, 'Eccube\\Security\\Core\\User\\MemberProvider', NULL, 'Trikoder\\Bundle\\OAuth2Bundle\\Security\\EntryPoint\\OAuth2EntryPoint', NULL, NULL, [0 => 'oauth2'], NULL));
