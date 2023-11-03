<?php
namespace App\Reservation\Entity;

use App\PlannedStay\Entity\PlannedStay;
use App\Room\Entity\Room;
use Doctrine\ORM\Mapping as ORM;
use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use App\User\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    public function __construct()
    {
        $this->created = new \DateTime();
    }

    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=PlannedStay::class)
     * @ORM\JoinColumn(name="plannedStay_id", referencedColumnName="id")
     */
    private $plannedStay;

    /**
     * @ORM\ManyToOne(targetEntity=Room::class)
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    private $room;

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(Room $room): void
    {
        $this->room = $room;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(User $client): void
    {
        $this->client = $client;
    }

    public function getPlannedStay(): ?PlannedStay
    {
        return $this->plannedStay;
    }

    public function setPlannedStay(PlannedStay $plannedStay): void
    {
        $this->plannedStay = $plannedStay;
    }
}
