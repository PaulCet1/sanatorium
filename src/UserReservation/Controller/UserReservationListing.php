<?php

namespace App\UserReservation\Controller;

use App\Reservation\Repositories\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class UserReservationListing extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
    ) {
    }

    public function __invoke()
    {
        $user = $this->getUser();

        $client_id = $user->getId();
        // var_dump($client_id);

        $reservations = $this->reservationRepository->createQueryBuilder('r')
            ->where('r.client = :client')
            ->setParameter('client', $client_id)
            ->getQuery()
            ->getResult();

        return new Response($this->twig->render('ReservationUser/listing.twig', [
            'user' => $user,
            'reservations' => $reservations,
        ]));
    }
}
