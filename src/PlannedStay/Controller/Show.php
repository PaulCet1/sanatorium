<?php

namespace App\PlannedStay\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use App\Reservation\Repositories\ReservationRepository;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private PlannedStayRepository $plannedStayRepository,
        private ReservationRepository $reservationRepository,
        private TreatmentPlanRepository $treatmentPlanRepository,
    ){}

    public function __invoke(int $id): Response
    {
        $plannedStay = $this->plannedStayRepository->find($id);
        $treatmentPlans = $this->treatmentPlanRepository->findTreatmentsByRehabilitationStay($plannedStay->getRehabilitationStay()->getId());
        $totalCost = 0;
        foreach ($treatmentPlans as $treatmentPlan) {
            $totalCost += $treatmentPlan->getTreatment()->getPrice();
        }
        dump($totalCost);


        $users = $this->reservationRepository->getClientsByPlannedId($id);

        return new Response($this->twig->render('PlannedStay/show.twig', [
            'plannedStay' => $plannedStay,
            'users' => $users,
            'totalCost' => $totalCost,
        ]));

    }

}