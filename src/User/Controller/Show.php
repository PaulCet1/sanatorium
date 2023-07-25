<?php

namespace App\User\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{

    public function __construct(
        private Environment $twig,
    )
    {}

    public function __invoke():Response
    {
        $content = $this->twig->render(
            'User/show.twig'
        );
        return new Response($content);
    }

}