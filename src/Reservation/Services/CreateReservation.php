<?php

namespace App\Reservation\Services;

use App\Reservation\Entity\Reservation;
use Doctrine\Persistence\ManagerRegistry;

class CreateReservation
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function createReservation(Reservation $reservation)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($reservation);
        $entityManager->flush();
    }
}
