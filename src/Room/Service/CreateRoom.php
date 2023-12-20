<?php

namespace App\Room\Service;

use App\Room\Entity\Room;
use Doctrine\Persistence\ManagerRegistry;

class CreateRoom
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function createTherapyRoom(Room $room)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($room);
        $entityManager->flush();
    }
}
