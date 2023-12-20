<?php

namespace App\Treatment\Controller;

use App\Treatment\Repository\TreatmentRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private TreatmentRepository $treatmentRepository,
    ) {
    }

    public function __invoke($id)
    {
        $treatment = $this->treatmentRepository->find($id);
        $content = $this->twig->render('Treatment/show.twig', [
            'treatment' => $treatment,
        ]);

        return new Response($content);
    }
}
