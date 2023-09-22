<?php

namespace App\User\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\User\Entity\User;
use App\User\Form\UserEditType;

class Edit extends AbstractController
{

    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function __invoke(Request $request, User $user)
    {
        $form = $this->createForm(UserEditType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->doctrine->getManager();
            $entityManager->flush();

            $this->addFlash('success', 'Dane użytkownika zostały zaktualizowane.');

            return $this->redirectToRoute('user_listing');
        }

        return $this->render('User/edit.twig', [
            'form' => $form->createView(),
        ]);
    }




}