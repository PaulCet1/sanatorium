<?php

namespace App\Treatment\Controller;

use App\Treatment\Entity\Treatment;
use App\Treatment\Form\TreatmentType;
use App\Treatment\Service\CreateTreatment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Create extends AbstractController
{
    public function __construct(
        private CreateTreatment $createTreatment,
    ){}
    public function __invoke(Request $request)
    {
        $treatment = new Treatment();
        $form = $this->createForm(TreatmentType::class, $treatment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->createTreatment->createTreatment($treatment);

            return $this->redirectToRoute('treatment_listing');
        }

        return $this->render('Treatment/create.twig', [
            'form' => $form->createView(),
        ]);
    }
}
