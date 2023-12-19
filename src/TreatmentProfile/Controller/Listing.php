<?php

namespace App\TreatmentProfile\Controller;

use App\TreatmentProfile\Repository\TreatmentProfileRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private TreatmentProfileRepository $treatmentProfileRepository,
        private PaginatorInterface $paginator,
    ){}

    public function __invoke(Request $request): Response
    {
        $treatment_profiles = $this->treatmentProfileRepository->findAll();
        $pagination = $this->paginator->paginate(
            $treatment_profiles,
            $request->query->getInt('page', 1),
            10
        );
        return new Response($this->twig->render('TreatmentProfile/listing.twig', [
            'pagination' => $pagination,
        ]));
    }

}