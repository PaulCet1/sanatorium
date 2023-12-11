<?php

namespace App\Reservation\Controller;

use App\Reservation\Repositories\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class StatusController extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
        private ManagerRegistry $doctrine,
    ){}


    public function listing(): Response
    {

        return new Response($this->twig->render('Reservation/Status/listing.twig', [
            'reservations' => $this->reservationRepository->findByStatus('waiting'),
        ]));
    }


    public function accept($id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $reservation = $this->reservationRepository->find($id);
        $reservation->setStatus('accepted');
        $entityManager->flush();

        return $this->redirectToRoute('reservation_status_listing');

    }

    public function reject($id): Response
    {
        $entityManager = $this->doctrine->getManager();
        $reservation = $this->reservationRepository->find($id);
        $reservation->setStatus('rejected');
        $entityManager->flush();

        return $this->redirectToRoute('reservation_status_listing');

    }

    public function rejectedlisting(): Response
    {
        return new Response($this->twig->render('Reservation/Status/rejected_accepted_listing.twig', [
            'reservations' => $this->reservationRepository->findByStatus('rejected'),
        ]));
    }

    public function acceptedlisting(): Response
    {
        return new Response($this->twig->render('Reservation/Status/rejected_accepted_listing.twig', [
            'reservations' => $this->reservationRepository->findByStatus('accepted'),
        ]));
    }

}