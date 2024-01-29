<?php

namespace App\PlannedStay\Controller;

use App\PlannedStay\Repository\PlannedStayRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private readonly Environment $twig,
        private readonly PlannedStayRepository $plannedStayRepository,
        private readonly PaginatorInterface $paginator,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $planned_stays = $this->plannedStayRepository->findAll();

        $pagination = $this->paginator->paginate(
            $planned_stays,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('PlannedStay/listing.twig', [
            'planned_stays' => $pagination,
        ]));
    }
}
