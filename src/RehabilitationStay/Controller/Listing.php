<?php

namespace App\RehabilitationStay\Controller;

use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private RehabilitationStayRepository $repository,
    ) {
    }

    public function __invoke()
    {
        return new Response($this->twig->render('RehabilitationStay/listing.twig', [
            'rehabilitationStays' => $this->repository->findAll(),
        ]));
    }
}
