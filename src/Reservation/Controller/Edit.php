<?php

namespace App\Reservation\Controller;

use App\Reservation\Entity\Reservation;
use App\Reservation\Form\ReservationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class Edit extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ManagerRegistry $doctrine,
        private TranslatorInterface $translator,
    ) {
    }

    public function __invoke(Request $request, Reservation $reservation)
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'Dane zostały zaktualizowane!');

            return $this->redirectToRoute('reservation_listing');
        }

        return new Response($this->twig->render('Reservation/create.twig', [
            'form' => $form->createView(),
            'data' => $this->translator->trans('reservation.edit.value'),
        ]));
    }
}
