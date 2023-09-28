<?php

namespace App\User\Controller;

use App\User\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}


    public function __invoke(Request $request, User $user)
    {
        $em = $this->doctrine->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'Element został usunięty');

        return $this->redirectToRoute('user_listing');
    }

}