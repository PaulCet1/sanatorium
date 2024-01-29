<?php

namespace App\Treatment\Controller;

use App\Treatment\Repository\TreatmentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private TreatmentRepository $treatmentRepository,
        private PaginatorInterface $paginator,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $treatments = $this->treatmentRepository->findAll();
        $pagination = $this->paginator->paginate(
            $treatments,
            $request->query->getInt('page', 1),
            10
        );
        $content = $this->twig->render(
            'Treatment/listing.twig',
            ['pagination' => $pagination]);

        return new Response($content);
    }
}
