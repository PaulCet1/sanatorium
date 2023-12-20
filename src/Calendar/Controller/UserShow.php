<?php

namespace App\Calendar\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class UserShow
{
    public function __construct(
        private Environment $twig,
        private TreatmentPlanRepository $treatmentPlanRepository,
        private PlannedStayRepository $plannedStayRepository,
        private RehabilitationStayRepository $rehabilitationStayRepository,
    ) {
    }

    public function __invoke(int $id): Response
    {
        $plannedStay = $this->plannedStayRepository->find($id);
        $rehabilitationStay = $plannedStay->getRehabilitationStay();
        $rehabilitationStayId = $rehabilitationStay->getId();
        $treatment_plans = $this->treatmentPlanRepository->findByRehabilitationStayId($rehabilitationStayId);

        $start_date = $plannedStay->getStartDate();
        dump($start_date);

        return new Response($this->twig->render('Calendar/User/show.twig', [
            'treatment_plans' => $treatment_plans,
            'start_date' => $start_date,
        ]));
    }
}
