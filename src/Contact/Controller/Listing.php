<?php

namespace App\Contact\Controller;

use App\Contact\Repository\ContactRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment        $twig,
        private PaginatorInterface $paginator,
        private ContactRepository $contactRepository,

    )
    {
    }

    public function __invoke(Request $request): Response
    {
        $contacts = $this->contactRepository->findAll();

        $pagination = $this->paginator->paginate(
            $contacts,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('Contact/listing.twig', [
            'pagination' => $pagination,
        ]));
    }

}