<?php

namespace App\Room\Controller;

use App\Room\Entity\Room;
use App\Room\Form\RoomType;
use App\Room\Service\CreateRoom;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private CreateRoom $createRoom,
        private Environment $twig,
        private TranslatorInterface $translator,
    ){}

    public function __invoke(Request $request): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->createRoom->createTherapyRoom($room);

            return $this->redirectToRoute('room_listing');
        }

        return new Response($this->twig->render('Room/create.twig', [
            'form' => $form->createView(),
            'data' => $this->translator->trans('room.create'),
        ]));
    }

}