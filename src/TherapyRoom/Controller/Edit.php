<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Entity\TherapyRoom;
use App\TherapyRoom\Form\TherapyRoomType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Edit extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request, TherapyRoom $therapyRoom)
    {
        $form = $this->createForm(TherapyRoomType::class, $therapyRoom);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'Dane sali zabiegowej zostały zaktualizowane');

            return $this->redirectToRoute('therapy-room-listing');
        }

        return $this->render('TherapyRoom/create.twig', [
            'form' => $form->createView(),
            'data' => 'Edytuj salę zabiegową',
        ]);
    }
}
