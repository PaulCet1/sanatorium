<?php

namespace App\Room\Controller;

use App\Room\Entity\Room;
use App\Room\Service\DeleteRoom;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Delete extends AbstractController
{
    public function __construct(
        private DeleteRoom $deleteRoom,
    ) {
    }

    /**
     * @IsGranted("ROLE_ADMIN", message="You do not have access to this resource")
     */
    public function __invoke(Room $room)
    {
        $this->deleteRoom->DeleteRoom($room);

        return $this->redirectToRoute('room_listing');
    }
}
