<?php

namespace App\Calendar\Controller;

use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private TreatmentPlanRepository $treatmentPlanRepository,
    ){}


    public function __invoke(int $id): Response
    {
        $treatment_plans = $this->treatmentPlanRepository->findByRehabilitationStayId($id);
        return new Response($this->twig->render('Calendar/show.twig',[
            'treatment_plans' => $treatment_plans,
        ]));
    }

}