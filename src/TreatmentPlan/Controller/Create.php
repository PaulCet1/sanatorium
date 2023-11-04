<?php

namespace App\TreatmentPlan\Controller;

use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use App\TreatmentPlan\Entity\TreatmentPlan;
use App\TreatmentPlan\Form\TreatmentPlanType;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use App\TreatmentPlan\Service\CreateTreatmentPlan;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private TreatmentPlanRepository $treatmentPlanRepository,
        private CreateTreatmentPlan $createTreatmentPlan,
        private RehabilitationStayRepository $rehabilitationStayRepository,
    ){}

    public function __invoke(Request $request, $id): Response
    {
        $treatmentPlan = new TreatmentPlan();
        $rehabilitationStay =  $this->rehabilitationStayRepository->find($id);
        $treatmentPlan->setRehabilitationStay($rehabilitationStay);
        $treatments = $rehabilitationStay->getTreatments();

        $form = $this->createForm(TreatmentPlanType::class, $treatmentPlan, ['treatments' => $treatments]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->createTreatmentPlan->CreateTreatmentPlan($treatmentPlan);

            return $this->redirectToRoute('treatment_plan_listing');
        }



        return new Response($this->twig->render('TreatmentPlan/create.twig', [
            'form' => $form->createView(),
        ]));
    }

}