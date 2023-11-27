<?php

namespace App\SanatorySurvey\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Complete
{
    public function __construct(
        private Environment $twig,
    )
    {
    }

    public function __invoke(): Response
    {
        return new Response($this->twig->render('SanatorySurvey/complete.twig'));
    }

}