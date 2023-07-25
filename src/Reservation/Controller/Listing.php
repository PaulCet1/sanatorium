<?php

namespace App\Reservation\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Listing
{
    public function __construct(
        private Environment $twig,
    )
    {}

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function __invoke(): Response
    {
        $content = $this->twig->render(
            'Reservation/listing.twig',

        );

        return new Response($content);
    }

}