<?php

namespace App\Room\Controller;

use App\Room\Repository\RoomRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{
    public function __construct(
        private Environment $twig,
        private RoomRepository $repository,
    ){}

    public function __invoke()
    {
        return new Response($this->twig->render('Room/listing.twig', [
            'rooms' => $this->repository->findAll(),
        ]));
    }

}