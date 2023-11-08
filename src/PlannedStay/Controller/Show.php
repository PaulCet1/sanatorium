<?php

namespace App\PlannedStay\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use App\Reservation\Repositories\ReservationRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private PlannedStayRepository $plannedStayRepository,
        private ReservationRepository $reservationRepository,
    ){}

    public function __invoke(int $id): Response
    {
        $plannedStay = $this->plannedStayRepository->find($id);

        $users = $this->reservationRepository->getClientsByPlannedId($id);

        return new Response($this->twig->render('PlannedStay/show.twig', [
            'plannedStay' => $plannedStay,
            'users' => $users,
        ]));

    }

}