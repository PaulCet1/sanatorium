<?php

namespace App\Treatment\Controller;

use App\Treatment\Entity\Treatment;
use App\Treatment\Form\TreatmentEditType;
use App\Treatment\Service\CreateTreatment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Edit extends AbstractController
{
    public function __construct(
        private CreateTreatment $createTreatment,
    ){}
    public function __invoke(Request $request, Treatment $treatment)
    {
        $form = $this->createForm(TreatmentEditType::class, $treatment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->createTreatment->createTreatment($treatment);

            return $this->redirectToRoute('treatment_show', ['id' => $treatment->getId()]);
        }

        return $this->render('Treatment/edit.twig', [
            'form' => $form->createView(),
        ]);
    }
}
