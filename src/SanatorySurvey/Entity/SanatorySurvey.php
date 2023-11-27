<?php

namespace App\SanatorySurvey\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use App\Reservation\Entity\Reservation;
use App\User\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SanatorySurvey
{
    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\ManyToOne(targetEntity=Reservation::class)
     * @ORM\JoinColumn(name="reservation_id", referencedColumnName="id")
     */
    private $reservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $rehabilitationStayRating;

    /**
     * @ORM\Column(type="integer")
     */
    private $treatmentRating;

    /**
     * @ORM\Column(type="integer")
     */
    private $staffRating;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $text;

    public function __construct()
    {
        $this->created = new \DateTime();
    }



    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(Reservation $reservation): void
    {
        $this->reservation = $reservation;
    }

    public function getRehabilitationStayRating(): ?int
    {
        return $this->rehabilitationStayRating;
    }

    public function setRehabilitationStayRating(int $rehabilitationStayRating): void
    {
        $this->rehabilitationStayRating = $rehabilitationStayRating;
    }

    public function getTreatmentRating(): ?int
    {
        return $this->treatmentRating;
    }

    public function setTreatmentRating(int $treatmentRating): void
    {
        $this->treatmentRating = $treatmentRating;
    }

    public function getStaffRating(): ?int
    {
        return $this->staffRating;
    }

    public function setStaffRating(int $staffRating): void
    {
        $this->staffRating = $staffRating;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }


}