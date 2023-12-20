<?php

namespace App\Room\Controller;

use App\Room\Repository\RoomRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private RoomRepository $repository,
        private PaginatorInterface $paginator,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $rooms = $this->repository->findAll();

        $pagination = $this->paginator->paginate(
            $rooms,
            $request->query->getInt('page', 1),
            10
        );

        return new Response($this->twig->render('Room/listing.twig', [
            'pagination' => $pagination,
        ]));
    }
}
