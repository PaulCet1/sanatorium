<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Repository\TherapyRoomRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    /**
     * @param Environment $twig
     * @param TherapyRoomRepository $repository
     * @param PaginatorInterface $paginator
     */
    public function __construct(
        private readonly Environment $twig,
        private readonly TherapyRoomRepository $repository,
        private readonly PaginatorInterface $paginator,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $query = $this->repository->findAll();
        $pagination = $this->paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('TherapyRoom/listing.twig', [
            'pagination' => $pagination,
        ]));
    }
}
