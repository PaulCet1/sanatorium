<?php

namespace App\User\Controller;

use App\User\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;


class Listing
{
    public function __construct(
        private Environment $twig,
        private UserRepository $userRepository,
    ){}

    public function __invoke():Response
    {
        $content = $this->twig->render(
            'User/listing.twig',
            ['users' => $this->userRepository->findAll()]
        );
        return new Response($content);
    }

}