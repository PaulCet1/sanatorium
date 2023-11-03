<?php

namespace App\UserReservation\Controller;

use App\Reservation\Entity\Reservation;
use App\Reservation\Repositories\ReservationRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
    ){}
    public function __invoke($id)
    {
        return new Response($this->twig->render('ReservationUser/show.twig', [
            'reservation' => $this->reservationRepository->find($id),
        ]));

    }

}