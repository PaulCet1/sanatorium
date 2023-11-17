<?php

namespace App\TherapyRoom\Controller;

use App\TherapyRoom\Entity\TherapyRoom;
use App\TherapyRoom\Repository\TherapyRoomRepository;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
class Show
{
    public function __construct(
        private Environment $twig,
        private TherapyRoomRepository $repository,
    )
    {}

    public function __invoke(TherapyRoom $room)
    {
        return new Response($this->twig->render('TherapyRoom/show.twig',[
            'therapy_room' => $this->repository->find($room),
        ]));
    }
}