<?php

namespace App\Reservation\Controller;

use App\Reservation\Entity\Reservation;
use App\Reservation\Services\DeleteReservation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Delete extends AbstractController
{
    public function __construct(
        private readonly DeleteReservation $deleteReservation,
    ){}

    public function __invoke(Reservation $reservation): Response
    {
        $this->deleteReservation->DeleteReservation($reservation);

        return $this->redirectToRoute('reservation_listing');
    }
}
