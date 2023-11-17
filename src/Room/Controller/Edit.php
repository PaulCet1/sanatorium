<?php

namespace App\Room\Controller;

use App\Room\Entity\Room;
use App\Room\Form\RoomEditType;
use App\Room\Form\RoomType;
use App\TherapyRoom\Entity\TherapyRoom;
use App\TherapyRoom\Form\TherapyRoomEditType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Edit extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function __invoke(Request $request, Room $room)
    {
        $form = $this->createForm(RoomType::class, $room);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->doctrine->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'Dane pokoju zostały zaktualizowane');

            return $this->redirectToRoute('room_listing');
        }

        return $this->render('Room/create.twig', [
            'form' => $form->createView(),
            'data' => 'Edytuj pokój',
        ]);
    }
}