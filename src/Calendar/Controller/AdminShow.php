<?php

namespace App\Calendar\Controller;

use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AdminShow
{
    public function __construct(
        private readonly Environment $twig,
        private readonly TreatmentPlanRepository $treatmentPlanRepository,
    ) {
    }


    public function __invoke(int $id): Response
    {
        $treatment_plans = $this->treatmentPlanRepository->findByRehabilitationStayId($id);
        try {
        $content = $this->twig->render('Calendar/Admin/show.twig', [
            'treatment_plans' => $treatment_plans,
        ]);
        } catch (LoaderError | RuntimeError | SyntaxError $e) {
            return new Response('An error occurred: ' . $e->getMessage());
        }
        return new Response($content);
    }
}
