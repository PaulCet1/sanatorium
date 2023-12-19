<?php

namespace App\Reservation\Controller;

use App\RehabilitationStay\Repository\RehabilitationStayRepository;
use App\Reservation\Repositories\ReservationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Listing
{
    public function __construct(
        private Environment $twig,
        private ReservationRepository $reservationRepository,
        private PaginatorInterface $paginator
    )
    {}

    /**
     * @IsGranted("ROLE_USER")
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function __invoke(Request $request): Response
    {
        $query = $this->reservationRepository->createQueryBuilder('r')
            ->leftJoin('r.client', 'c')
            ->where('c.fullname LIKE :search')
            ->setParameter('search', '%' . $request->query->get('search', '') . '%')
            ->orderBy($request->get('sort', 'c.fullname'), $request->get('direction', 'asc'))
            ->getQuery();

        $pagination = $this->paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        $content = $this->twig->render(
            'Reservation/listing.twig',
            ['pagination' => $pagination]
        );

        return new Response($content);
    }

}
