<?php

namespace App\PlannedStay\Controller;

use App\PlannedStay\Entity\PlannedStay;
use App\PlannedStay\Form\PlannedStayType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request)
    {
        $plannedStay = new PlannedStay();
        $form = $this->createForm(PlannedStayType::class, $plannedStay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $duration = $plannedStay->getRehabilitationStay()->getDuration();

            $start_date = $form->get('start_date')->getData();
            $end_date = clone $start_date;
            $end_date->modify('+'.$duration.' days');
            $plannedStay->setEndDate($end_date);
            $em = $this->doctrine->getManager();
            $em->persist($plannedStay);
            $em->flush();

            return $this->redirectToRoute('planned_stay_listing');
        }

        return new Response($this->twig->render('PlannedStay/create.twig', [
            'form' => $form->createView(),
        ]));
    }
}
