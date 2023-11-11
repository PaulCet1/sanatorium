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

    /**
     * @ORM\Column(type="integer")
     */
    private $numOfPeople;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $referralNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pesel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NFZPlace;


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

    public function getNumOfPeople(): ?int
    {
        return $this->numOfPeople;
    }

    public function setNumOfPeople(int $numOfPeople): void
    {
        $this->numOfPeople = $numOfPeople;
    }

    public function getReferralNumber(): ?string
    {
        return $this->referralNumber;
    }

    public function setReferralNumber(string $referralNumber): void
    {
        $this->referralNumber = $referralNumber;
    }

    public function getPesel(): ?string
    {
        return $this->pesel;
    }

    public function setPesel(string $pesel): void
    {
        $this->pesel = $pesel;
    }

    public function getNFZPlace(): ?string
    {
        return $this->NFZPlace;
    }

    public function setNFZPlace(string $NFZPlace): void
    {
        $this->NFZPlace = $NFZPlace;
    }
}
