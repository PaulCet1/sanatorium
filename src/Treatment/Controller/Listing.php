<?php

namespace App\Treatment\Controller;

use App\Treatment\Repository\TreatmentRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private TreatmentRepository $treatmentRepository,
    ) {
    }

    public function __invoke(): Response
    {
        $content = $this->twig->render(
            'Treatment/listing.twig',
            ['treatments' => $this->treatmentRepository->findAll()]);

        return new Response($content);
    }
}
