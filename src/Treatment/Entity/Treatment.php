<?php

namespace App\Treatment\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use App\TherapyRoom\Entity\TherapyRoom;
use Doctrine\ORM\Mapping as ORM;
use App\User\Entity\User;

/**
 * @ORM\Entity
 * @ORM\Table(name="treatment")
 */
class Treatment
{
    public function __construct()
    {
        $this->created = new \DateTime();
    }

    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $name;



    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(name="leading_person_id", referencedColumnName="id")
     */
    private $leading_person;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string")
     */
    private $duration;

    /**
     * @ORM\ManyToOne(targetEntity=TherapyRoom::class)
     * @ORM\JoinColumn(name="therapy_room_id", referencedColumnName="id")
     */
    private $therapy_room;

    /**
     * @ORM\Column(type="integer", unique=false)
     */
    private $number_of_patients;

    /**
     * @ORM\ManyToMany(targetEntity="App\RehabilitationStay\Entity\RehabilitationStay", mappedBy="treatments")
     */
    private $rehabilitationStays;



    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLeadingPerson(): ?User
    {
        return $this->leading_person;
    }

    public function setLeadingPerson(User $leading_person): void
    {
        $this->leading_person = $leading_person;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    public function getTherapyRoom(): ?TherapyRoom
    {
        return $this->therapy_room;
    }

    public function setTherapyRoom(?TherapyRoom $therapyRoom): void
    {
        $this->therapy_room = $therapyRoom;
    }

    public function getNumberOfPatients(): ?int
    {
        return $this->number_of_patients;
    }

    public function setNumberOfPatients(int $number_of_patients): void
    {
        $this->number_of_patients = $number_of_patients;
    }



}
