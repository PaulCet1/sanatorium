<?php

namespace App\User\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show extends AbstractController
{
    public function __construct(
        private Environment $twig,
    ) {
    }

    public function __invoke(): Response
    {
        $user = $this->getUser();
        $content = $this->twig->render(
            'User/show.twig', [
                'user' => $user,
            ]
        );

        return new Response($content);
    }
}
