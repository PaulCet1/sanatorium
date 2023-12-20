<?php

namespace App\User\Controller;

use App\User\Entity\User;
use App\User\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Create extends AbstractController
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($password);

            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_listing'); // Change 'user_list' to the route you want to redirect to
        }

        return $this->render('User/create.twig', [
            'form' => $form->createView(),
            'data' => 'Tworzenie użytkownika',
        ]);
    }
}
