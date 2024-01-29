<?php

namespace App\TreatmentPlan\Controller;

use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private readonly Environment $twig,
        private readonly TreatmentPlanRepository $treatmentPlanRepository,
    ) {
    }

    public function __invoke(): Response
    {
        $planData = $this->treatmentPlanRepository->findAll();

        usort($planData, function ($a, $b) {
            return strcmp($a->getRehabilitationStay()->getName(), $b->getRehabilitationStay()->getName());
        });

        return new Response($this->twig->render('TreatmentPlan/listing.twig', [
            'plan_data' => $planData,
        ]));
    }
}
