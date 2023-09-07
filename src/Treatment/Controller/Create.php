<?php

namespace App\Treatment\Controller;

use App\Treatment\Entity\Treatment;
use App\Treatment\Form\TreatmentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Create extends AbstractController
{
    public function __invoke(Request $request)
    {
        $treatment = new Treatment();
        $form = $this->createForm(TreatmentType::class, $treatment);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($treatment);
            $entityManager->flush();

            return $this->redirectToRoute('treatment_show');
        }

        return $this->render('Treatment/create.twig', [
            'form' => $form->createView(),
        ]);
    }
}
