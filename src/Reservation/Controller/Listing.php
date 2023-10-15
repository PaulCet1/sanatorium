<?php

namespace App\Reservation\Controller;

use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use App\Reservation\Repositories\ReservationRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Listing
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
        private RehabilitationStayRepository $rehabilitationStayRepository,
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
            ['reservations' => $this->reservationRepository->findAll()]
        );

        return new Response($content);
    }

}