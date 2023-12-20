<?php

namespace App\Place\Controller;

use App\Place\Repository\PlacesRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private PlacesRepository $placesRepository
    ) {
    }

    public function __invoke(): Response
    {
        $content = $this->twig->render(
            'Place/listing.twig',
            ['places' => $this->placesRepository->findAll()]);

        return new Response($content);
    }
}
