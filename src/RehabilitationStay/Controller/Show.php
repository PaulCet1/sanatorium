<?php

namespace App\RehabilitationStay\Controller;

use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private RehabilitationStayRepository $repository,
    ) {
    }

    public function __invoke($id)
    {
        $content = $this->twig->render('RehabilitationStay/show.twig', [
            'rehabilitation_stay' => $this->repository->find($id),
        ]);

        return new Response($content);
    }
}
