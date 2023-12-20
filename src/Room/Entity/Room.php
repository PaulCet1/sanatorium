<?php

namespace App\Room\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 *
 * @ORM\Table(name="room")
 */
class Room
{
    use IdTrait;
    use CreatedTrait;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    /**
     * @ORM\Column(type="integer", unique=true)
     */
    private $room_number;

    /**
     * @ORM\Column(type="integer", unique=false)
     */
    private $places_num;

    public function getPlacesNum(): int
    {
        return $this->places_num;
    }

    public function setPlacesNum(int $places_num): void
    {
        $this->places_num = $places_num;
    }

    public function getRoomNumber(): ?int
    {
        return $this->room_number;
    }

    public function setRoomNumber(int $room_number): void
    {
        $this->room_number = $room_number;
    }
}
