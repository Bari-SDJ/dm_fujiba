<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\EventListener\LoginHistoryListener' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/EventListener/LoginHistoryListener.php';

return $this->privates['Eccube\\EventListener\\LoginHistoryListener'] = new \Eccube\EventListener\LoginHistoryListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['Eccube\\Request\\Context'] ?? $this->getContextService()), ($this->privates['Eccube\\Repository\\MemberRepository'] ?? $this->load('getMemberRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\LoginHistoryStatusRepository'] ?? $this->load('getLoginHistoryStatusRepositoryService.php')));
