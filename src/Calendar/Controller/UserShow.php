<?php

namespace App\Calendar\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class UserShow
{
    public function __construct(
        private readonly Environment $twig,
        private readonly TreatmentPlanRepository $treatmentPlanRepository,
        private readonly PlannedStayRepository $plannedStayRepository,
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

        try {
        $content = $this->twig->render('Calendar/User/show.twig', [
            'treatment_plans' => $treatment_plans,
            'start_date' => $start_date,
        ]);
        } catch (LoaderError | RuntimeError | SyntaxError $e) {
            return new Response('An error occurred: ' . $e->getMessage());
        }
            return new Response($content);

    }
}
