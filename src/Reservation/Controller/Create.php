<?php

namespace App\Reservation\Controller;

use App\Reservation\Entity\Reservation;
use App\Reservation\Form\ReservationType;
use App\Reservation\Services\CreateReservation;
use App\TreatmentProfile\Entity\TreatmentProfile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private CreateReservation $createReservation,
        private TranslatorInterface $translator,
    ) {
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')", message="Acces denied")
     */
    public function __invoke(Request $request): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->createReservation->createReservation($reservation);

            return $this->redirectToRoute('reservation_listing');
        }

        return new Response($this->twig->render('Reservation/create.twig', [
            'form' => $form->createView(),
            'data' => $this->translator->trans('reservation.create.value'),
        ]));
    }

    private function getTreatmentProfileFromReferralNumber(string $referralNumber): ?TreatmentProfile
    {
        $profileCode = substr($referralNumber, -2);

        return $this->getDoctrine()->getRepository(TreatmentProfile::class)->findOneBy(['code' => $profileCode]);
    }
}
