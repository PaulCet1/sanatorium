<?php

namespace App\User\Controller;

use App\User\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Show extends AbstractController
{
    public function __construct(
        private readonly Environment $twig,
        private readonly UserRepository $userRepository,
    ) {
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function __invoke(): Response
    {
        $user = $this->getUser();
        $content = $this->twig->render(
            'User/show.twig', [
                'user' => $user,
            ]
        );

        return new Response($content);
    }

    public function ShowUserById($id): Response
    {
        $user = $this->userRepository->find($id);
        $content = $this->twig->render(
            'User/show.twig', [
                'user' => $user,
            ]
        );
        return new Response($content);
    }
}
