<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Repository\TherapyRoomRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{

    public function __construct(
        private Environment $twig,
        private TherapyRoomRepository $repository,
    ){}


    public function __invoke()
    {
        return new Response($this->twig->render('TherapyRoom/listing.twig',[
            'therapy_rooms' => $this->repository->findAll(),
        ]));
    }

}