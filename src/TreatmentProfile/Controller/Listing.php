<?php

namespace App\TreatmentProfile\Controller;

use App\TreatmentProfile\Repository\TreatmentProfileRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private TreatmentProfileRepository $treatmentProfileRepository,
    ){}

    public function __invoke(): Response
    {
        return new Response($this->twig->render('TreatmentProfile/listing.twig', [
            'treatment_profiles' => $this->treatmentProfileRepository->findAll(),
        ]));
    }

}