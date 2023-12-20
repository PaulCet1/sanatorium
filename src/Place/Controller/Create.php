<?php

namespace App\Place\Controller;

use App\Place\Entity\Place;
use App\Place\Form\PlaceType;
use App\Place\Services\CreatePlace;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Create extends AbstractController
{
    public function __construct(
        private CreatePlace $createPlace,
        private Environment $twig,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $place = new Place();
        $form = $this->createForm(PlaceType::class, $place);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->createPlace->createPlace($place);

            return $this->redirectToRoute('places_listing');
        }

        return new Response($this->twig->render('Place/create.twig', [
            'form' => $form->createView(),
        ]));
    }
}

// class Create extends AbstractController
// {
//    public function __invoke(Request $request, ManagerRegistry $doctrine): Response
//    {
//        $place = new Place();
//        $form = $this->createForm(PlaceType::class, $place);
//
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $entityManager = $doctrine->getManager();
//            $entityManager->persist($place);
//            $entityManager->flush();
//
//            return $this->redirectToRoute('places_listing');
//        }
//
//        return $this->render('Place/create.twig', [
//            'form' => $form->createView(),
//        ]);
//    }
// }
