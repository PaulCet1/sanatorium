<?php

namespace App\Place\Controller;

use App\Place\Entity\Place;
use App\Place\Repository\PlacesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}
    public function __invoke(Request $request, Place $place)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($place);
        $entityManager->flush();

        $this->addFlash('success', 'Element został usunięty!');

        return $this->redirectToRoute('places_listing');
    }

}