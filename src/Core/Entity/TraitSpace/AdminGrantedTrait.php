<?php
namespace App\Core\Entity\TraitSpace;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;

trait AdminGrantedTrait
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * Sprawdza, czy zalogowany użytkownik ma rolę ROLE_ADMIN.
     *
     * @throws AccessDeniedException jeśli użytkownik nie ma roli ROLE_ADMIN
     */
    protected function checkAdminRole(): void
    {
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Dostęp zabroniony. Wymagana rola: ROLE_ADMIN.');
        }
    }
}