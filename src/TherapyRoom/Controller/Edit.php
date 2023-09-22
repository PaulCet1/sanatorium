<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Entity\TherapyRoom;
use App\TherapyRoom\Form\TherapyRoomEditType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class Edit extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function __invoke(Request $request, TherapyRoom $therapyRoom)
    {
        $form = $this->createForm(TherapyRoomEditType::class, $therapyRoom);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->doctrine->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'Dane sali zabiegowej zostały zaktualizowane');

            return $this->redirectToRoute('therapy-room-listing');
        }

        return $this->render('TherapyRoom/edit.twig', [
            'form' => $form->createView(),
        ]);
    }
}