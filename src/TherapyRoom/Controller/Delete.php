<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Entity\TherapyRoom;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request, TherapyRoom $therapyRoom)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($therapyRoom);
        $entityManager->flush();

        $this->addFlash('success', 'Element został usunięty!');

        return $this->redirectToRoute('therapy-room-listing');
    }
}
