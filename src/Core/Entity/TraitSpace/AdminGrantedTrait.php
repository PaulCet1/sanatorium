<?php

namespace App\Core\Entity\TraitSpace;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

trait AdminGrantedTrait
{
    public function __construct(
        private AuthorizationCheckerInterface $authorizationChecker)
    {
    }

    protected function denyAccessUnlessAdmin(): void
    {
        if (!$this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException();
        }
    }
}
