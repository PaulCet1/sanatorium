<?php

namespace App\TherapyRoom\Service;

use App\TherapyRoom\Entity\TherapyRoom;
use Doctrine\Persistence\ManagerRegistry;

class CreateTherapyRoom
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function createTherapyRoom(TherapyRoom $therapyRoom)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($therapyRoom);
        $entityManager->flush();
    }
}
