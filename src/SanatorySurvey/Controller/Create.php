<?php

namespace App\SanatorySurvey\Controller;

use App\Reservation\Repositories\ReservationRepository;
use App\SanatorySurvey\Entity\SanatorySurvey;
use App\SanatorySurvey\Form\SanatorySurveyType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ManagerRegistry $doctrine,
        private ReservationRepository $reservationRepository,
    ) {
    }

    public function __invoke($reservation_id, Request $request): Response
    {
        $sanatorySurvey = new SanatorySurvey();
        $reservation = $this->reservationRepository->find($reservation_id);
        $sanatorySurvey->setReservation($reservation);
        $form = $this->createForm(SanatorySurveyType::class, $sanatorySurvey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine->getManager();
            $em->persist($sanatorySurvey);
            $em->flush();

            return $this->redirectToRoute('survey_complete');
        }

        return new Response($this->twig->render('SanatorySurvey/create.twig', [
            'form' => $form->createView(),
            'data' => 'Badanie opinii klienta',
        ]));
    }
}
