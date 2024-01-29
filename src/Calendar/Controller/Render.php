<?php

namespace App\Calendar\Controller;

use App\Service\DompdfService;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Render extends AbstractController
{
    public function __construct(
        private readonly DompdfService $dompdfService,
        private readonly TreatmentPlanRepository $treatmentPlanRepository,
    ) {
    }

    public function __invoke(int $id): Response
    {
        $treatment_plans = $this->treatmentPlanRepository->findByRehabilitationStayId($id);
        $html = $this->renderView('Calendar/Render/calendar.html.twig', [
            'treatment_plans' => $treatment_plans,
        ]);

        $pdfContent = $this->dompdfService->genereatePdf($html);

        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf;charset=UTF-8',
            'Content-Disposition' => 'inline; filename="Plan zabiegów"',
        ]);
    }
}
