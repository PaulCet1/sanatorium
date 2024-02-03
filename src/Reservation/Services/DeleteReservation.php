<?php

namespace App\Reservation\Services;

use App\Reservation\Entity\Reservation;
use Doctrine\Persistence\ManagerRegistry;

class DeleteReservation
{
    public function __construct(
        private readonly ManagerRegistry $doctrine,
    ){}


    public function DeleteReservation(Reservation $reservation): void
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($reservation);
        $entityManager->flush();
    }

}