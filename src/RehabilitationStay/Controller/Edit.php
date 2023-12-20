<?php

namespace App\RehabilitationStay\Controller;

use App\RehabilitationStay\Entity\RehabilitationStay;
use App\RehabilitationStay\Form\RehabilitationStayType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Edit extends AbstractController
{
    public function __construct(
        private Environment $twig,
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request, RehabilitationStay $rehabilitationStay)
    {
        $form = $this->createForm(RehabilitationStayType::class, $rehabilitationStay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine->getManager();
            $em->persist($rehabilitationStay);
            $em->flush();

            return $this->redirectToRoute('rehabilitation_stay_show', ['id' => $rehabilitationStay->getId()]);
        }

        return new Response($this->twig->render('RehabilitationStay/create.twig', [
            'form' => $form->createView(),
            'data' => 'Edycja turnusu',
        ]));
    }
}
