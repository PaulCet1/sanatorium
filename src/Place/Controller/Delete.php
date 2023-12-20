<?php

namespace App\Place\Controller;

use App\Place\Entity\Place;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request, Place $place)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($place);
        $entityManager->flush();

        $this->addFlash('success', 'Element został usunięty!');

        return $this->redirectToRoute('places_listing');
    }
}
