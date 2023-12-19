<?php

namespace App\Reservation\Controller;

use App\Reservation\Repositories\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class StatusController extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
        private ManagerRegistry $doctrine,
        private PaginatorInterface $paginator,
        private TranslatorInterface $translator,
    ){}


    public function listing(Request $request): Response
    {
        $reservations = $this->reservationRepository->findByStatus('waiting');
        $pagination = $this->paginator->paginate(
            $reservations,
            $request->query->getInt('page', 1),
            10
        );

        return new Response($this->twig->render('Reservation/Status/listing.twig', [
            'pagination' => $pagination,
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

    public function rejectedlisting(Request $request): Response
    {
        $reservations = $this->reservationRepository->findByStatus('rejected');
        $pagination = $this->paginator->paginate(
            $reservations,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('Reservation/Status/rejected_accepted_listing.twig', [
            'pagination' => $pagination,
            'title' => $this->translator->trans('reservation.status.rejected.title'),
            'desc' => $this->translator->trans('reservation.status.rejected.desc'),
        ]));
    }

    public function acceptedlisting(Request $request): Response
    {
        $reservations = $this->reservationRepository->findByStatus('accepted');
        $pagination = $this->paginator->paginate(
            $reservations,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('Reservation/Status/rejected_accepted_listing.twig', [
            'pagination' => $pagination,
            'title' => $this->translator->trans('reservation.status.accepted.title'),
            'desc' => $this->translator->trans('reservation.status.accepted.desc'),
        ]));
    }

}