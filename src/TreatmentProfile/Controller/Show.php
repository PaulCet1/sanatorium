<?php

namespace App\TreatmentProfile\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
    ) {
    }

    public function __invoke(): Response
    {
        return new Response($this->twig->render('TreatmentProfile/show.twig'));
    }
}
