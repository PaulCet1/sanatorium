<?php

namespace App\TreatmentProfile\Controller;

use App\TreatmentProfile\Entity\TreatmentProfile;
use App\TreatmentProfile\Form\TreatmentProfileType;
use App\TreatmentProfile\Service\CreateTreatmentProfile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private CreateTreatmentProfile $createTreatmentProfile,
        private TranslatorInterface $translator,
    ){}

    public function __invoke(Request $request): Response
    {
        $treatmentProfile = new TreatmentProfile();
        $form = $this->createForm(TreatmentProfileType::class, $treatmentProfile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->createTreatmentProfile->createTreatmentProfile($treatmentProfile);

            return $this->redirectToRoute('treatment_profile_listing');
        }



        return new Response($this->twig->render('TreatmentProfile/create.twig', [
            'form' => $form->createView(),
            'data' => $this->translator->trans('treatmentprofile.data.create.value'),
        ]));
    }

}