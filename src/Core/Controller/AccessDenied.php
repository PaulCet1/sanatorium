<?php

namespace App\Core\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AccessDenied
{
    public function __construct(
        private Environment $twig,
    ) {
    }

    public function __invoke(): Response
    {
        $content = $this->twig->render(
            'Core/access-denied.twig'
        );

        return new Response($content);
    }
}
