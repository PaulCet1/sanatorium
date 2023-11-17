<?php

namespace App\PlannedStay\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private PlannedStayRepository $plannedStayRepository,
    ){}

    public function __invoke()
    {
        return new Response($this->twig->render('PlannedStay/listing.twig', [
            'planned_stays' => $this->plannedStayRepository->findAll(),
        ]));
    }
}