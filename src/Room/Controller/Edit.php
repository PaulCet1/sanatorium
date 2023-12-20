<?php

namespace App\Room\Controller;

use App\Room\Entity\Room;
use App\Room\Form\RoomType;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

class Edit extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
        private TranslatorInterface $translator,
    ) {
    }

    /**
     * @IsGranted("ROLE_ADMIN", message="You do not have access to this resource")
     */
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
            'data' => $this->translator->trans('room.edit'),
        ]);
    }
}
