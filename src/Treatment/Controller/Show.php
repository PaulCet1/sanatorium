<?php

namespace App\Treatment\Controller;


use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
      private Environment $twig,
    ){}

    public function __invoke(): Response
    {
        $content = $this->twig->render('Treatments/show.twig');

        return new Response($content);
    }

}