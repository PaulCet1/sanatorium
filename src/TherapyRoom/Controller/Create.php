<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Entity\TherapyRoom;
use App\TherapyRoom\Form\TherapyRoomType;
use App\TherapyRoom\Service\CreateTherapyRoom;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private CreateTherapyRoom $createTherapyRoom,
        private Environment $twig,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $therapyRoom = new TherapyRoom();
        $form = $this->createForm(TherapyRoomType::class, $therapyRoom);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->createTherapyRoom->createTherapyRoom($therapyRoom);

            return $this->redirectToRoute('therapy-room-listing');
        }

        return new Response($this->twig->render('TherapyRoom/create.twig', [
            'form' => $form->createView(),
            'data' => 'Dodaj salę zabiegową',
        ]));
    }
}
