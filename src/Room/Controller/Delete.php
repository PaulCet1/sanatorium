<?php

namespace App\Room\Controller;

use App\Room\Entity\Room;
use App\Room\Service\CreateRoom;
use App\Room\Service\DeleteRoom;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private DeleteRoom $deleteRoom,
    ){}

    public function __invoke(Room $room)
    {
        $this->deleteRoom->DeleteRoom($room);


        return $this->redirectToRoute('room_listing');
    }

}