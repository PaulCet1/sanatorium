<?php

namespace App\UserReservation\Controller;

use App\Reservation\Entity\Reservation;
use App\Reservation\Services\CreateReservation;
use App\UserReservation\Form\UserReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class UserReservationCreate extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private CreateReservation $createReservation,
    ){}


    public function __invoke(Request $request)
    {
        $user = $this->getUser();
        $user_id=$user->getId();
        $reservation = new Reservation();
        $reservation->setClient($user);
        $form = $this->createForm(UserReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->createReservation->createReservation($reservation);

            return $this->redirectToRoute('UserReservationListing');
        }

        return new Response($this->twig->render('ReservationUser/create.twig', [
            'form' => $form->createView(),
        ]));
    }

}