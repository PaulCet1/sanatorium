<?php

namespace App\UserReservation\Controller;

use App\Reservation\Entity\Reservation;
use App\Reservation\Repositories\ReservationRepository;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
        private TreatmentPlanRepository $treatmentPlanRepository,
    ){}
    public function __invoke($id)
    {
        $reservation = $this->reservationRepository->find($id);
        $rehabilitationStayId = $reservation->getPlannedStay()->getRehabilitationStay()->getId();
        $treatmentPlans = $this->treatmentPlanRepository->findTreatmentsByRehabilitationStay($rehabilitationStayId);

        $cost = 0;
        foreach ($treatmentPlans as $treatmentPlan) {
            $cost += $treatmentPlan->getTreatment()->getPrice();
        }
        $numOfPeople = $reservation->getNumOfPeople();
        $totalCost = $numOfPeople * $cost;


        return new Response($this->twig->render('ReservationUser/show.twig', [
            'reservation' => $this->reservationRepository->find($id),
            'totalCost' => $totalCost,
        ]));

    }

}