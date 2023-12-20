<?php

namespace App\User\Controller;

use App\User\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private UserRepository $userRepository,
        private PaginatorInterface $paginator,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $searchTerm = $request->query->get('search');
        if ($searchTerm) {
            $users = $this->userRepository->searchByUsername($searchTerm);
        } else {
            $users = $this->userRepository->findAll();
        }

        $pagination = $this->paginator->paginate(
            $users,
            $request->query->getInt('page', 1),
            10
        );

        $content = $this->twig->render(
            'User/listing.twig',
            ['pagination' => $pagination],
        );

        return new Response($content);
    }
}
