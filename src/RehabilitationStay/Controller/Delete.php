<?php

namespace App\RehabilitationStay\Controller;

use App\RehabilitationStay\Entity\RehabilitationStay;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request, RehabilitationStay $rehabilitationStay)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($rehabilitationStay);
        $entityManager->flush();

        $this->addFlash('success', 'Element został usunięty!');

        return $this->redirectToRoute('rehabilitation_stay_listing');
    }
}
