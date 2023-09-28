<?php

namespace App\Room\Controller;

use App\Room\Entity\Room;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function __invoke(Request $request, Room $room)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($room);
        $entityManager->flush();

        $this->addFlash('success', 'Element został usunięty!');

        return $this->redirectToRoute('room_listing');
    }

}