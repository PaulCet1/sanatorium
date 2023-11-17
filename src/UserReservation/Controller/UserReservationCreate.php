<?php

namespace App\UserReservation\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use App\Reservation\Entity\Reservation;
use App\Reservation\Services\CreateReservation;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use App\TreatmentProfile\Entity\TreatmentProfile;
use App\TreatmentProfile\Repository\TreatmentProfileRepository;
use App\UserReservation\Form\FirstStepType;
use App\UserReservation\Form\SecondStepType;
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
        private TreatmentProfileRepository $treatmentProfileRepository,
        private RehabilitationStayRepository $rehabilitationStayRepository,
        private PlannedStayRepository $plannedStayRepository,
    ){}

    public function firstStep(Request $request): Response
    {
        $form = $this->createForm(FirstStepType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $referralNumber = $form->get('referral_number')->getData();
            $treatmentProfile = $this->getTreatmentProfileFromReferralNumber($referralNumber);

            $cleanedReferralNumber = str_replace('/', '', $referralNumber);
            dump($cleanedReferralNumber);

            return $this->redirectToRoute('UserReservationCreate2', [
                'treatmentProfileId' => $treatmentProfile->getId(),
                'referralNumber' => $cleanedReferralNumber,
                'pesel' => $form->get('pesel')->getData(),
                'NFZPlace' => $this->getNFZPlaceFromReferralNumber($referralNumber),
            ]);
        }



        return new Response($this->twig->render('ReservationUser/firstStep.twig',[
            'form' => $form->createView(),
        ]));
    }

    public function secondStep(int $treatmentProfileId, string $referralNumber, string $pesel, string $NFZPlace, Request $request): Response
    {
        $user = $this->getUser();
        $reservation = new Reservation();
        $reservation->setClient($user);
        $reservation->setReferralNumber($referralNumber);
        $reservation->setPesel($pesel);
        $reservation->setNFZPlace($NFZPlace);


        $rehabilitationStays = $this->rehabilitationStayRepository->findBy(['treatmentProfile' => $treatmentProfileId]);
        $plannedStays = $this->plannedStayRepository->findBy(['rehabilitation_stay' => $rehabilitationStays]);

        $form = $this->createForm(SecondStepType::class, $reservation, [
            'plannedStays' => $plannedStays,
            ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->createReservation->createReservation($reservation);

            return $this->redirectToRoute('UserReservationListing');
        }


        return new Response($this->twig->render('ReservationUser/secondStep.twig', [
            'form' => $form->createView(),
        ]));

    }

    private function getTreatmentProfileFromReferralNumber(string $referralNumber): ?TreatmentProfile
    {

        $profileCode = substr($referralNumber, -1);
        return $this->treatmentProfileRepository->findOneBy(['code' => $profileCode]);
    }

    private function getNFZPlaceFromReferralNumber(string $referralNumber): ?string
    {
        $placeCode = substr($referralNumber, 0, 2);

        $nfzBranches = [
            '01' => 'Dolnośląski Oddział Wojewódzki NFZ',
            '02' => 'Kujawsko-Pomorski Oddział Wojewódzki NFZ',
            '03' => 'Lubelski Oddział Wojewódzki NFZ',
            '04' => 'Lubuski Oddział Wojewódzki NFZ',
            '05' => 'Łódzki Oddział Wojewódzki NFZ',
            '06' => 'Małopolski Oddział Wojewódzki NFZ',
            '07' => 'Mazowiecki Oddział Wojewódzki NFZ',
            '08' => 'Opolski Oddział Wojewódzki NFZ',
            '09' => 'Podkarpacki Oddział Wojewódzki NFZ',
            '10' => 'Podlaski Oddział Wojewódzki NFZ',
            '11' => 'Pomorski Oddział Wojewódzki NFZ',
            '12' => 'Śląski Oddział Wojewódzki NFZ',
            '13' => 'Świętokrzyski Oddział Wojewódzki NFZ',
            '14' => 'Warmińsko-Mazurski Oddział Wojewódzki NFZ',
            '15' => 'Wielkopolski Oddział Wojewódzki NFZ',
            '16' => 'Zachodniopomorski Oddział Wojewódzki NFZ',
        ];

        return $nfzBranches[$placeCode] ?? null;
    }

}