<?php

namespace App\User\Controller;

use App\User\Service\RegisterUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    /**
     * @Route("/rejestracja",name="registration")
     */
    public function registration(Request $request, RegisterUser $registerUser)
    {
        if ($request->isMethod('POST')) {
            try {
                $registerUser->registerFromRequest($request);
                $this->addFlash('success', 'Zarejestrowałeś się!');
            } catch (\Exception $ex) {
                $this->addFlash('danger', $ex->getMessage());
            }
            return $this->redirectToRoute('login');
        }

        return $this->render('User/Auth/registration.twig');
    }

    /**
     * @Route("/logowanie",name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('User/Auth/login.twig', [
            'error' => $error,
            'last_username' => $lastUsername,
        ]);
    }

    /**
     * @Route("/logout",name="logout")
     */
    public function logout(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('User/Auth/logout.twig', [
            'error' => $error,
            'last_username' => $lastUsername,
        ]);
    }
}
