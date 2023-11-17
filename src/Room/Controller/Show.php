<?php

namespace App\Room\Controller;

use App\Room\Repository\RoomRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment $twig,
        private RoomRepository $roomRepository,
    ){}

    public function __invoke($id){

        return new Response($this->twig->render('Room/show.twig', [
            'room' => $this->roomRepository->find($id),
        ]));
    }

}