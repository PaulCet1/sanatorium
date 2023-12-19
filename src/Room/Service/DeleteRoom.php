<?php

namespace App\Room\Service;

use App\Room\Entity\Room;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class DeleteRoom
{
    public function __construct(
      private ManagerRegistry $doctrine,
    ){}

    public function DeleteRoom(Room $room): void
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($room);
        $entityManager->flush();
    }

}