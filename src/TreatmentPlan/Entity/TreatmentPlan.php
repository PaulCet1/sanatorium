<?php

namespace App\TreatmentPlan\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Treatment\Entity\Treatment;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TreatmentPlan
{
    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\ManyToOne(targetEntity=RehabilitationStay::class)
     *
     * @ORM\JoinColumn(name="rehabilitation_stay_id", referencedColumnName="id")
     */
    private $rehabilitationStay;

    /**
     * @ORM\ManyToOne(targetEntity=Treatment::class)
     *
     * @ORM\JoinColumn(name="treatment_id", referencedColumnName="id")
     */
    private $treatment;

    /**
     * @ORM\Column(type="integer")
     */
    private $dayNumber;

    /**
     * @ORM\Column(type="time")
     */
    private $start_time;

    /**
     * @ORM\Column(type="time")
     */
    private $end_time;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    public function getRehabilitationStay(): RehabilitationStay
    {
        return $this->rehabilitationStay;
    }

    public function setRehabilitationStay(RehabilitationStay $rehabilitationStay): void
    {
        $this->rehabilitationStay = $rehabilitationStay;
    }

    public function getStartTime(): \DateTime
    {
        return $this->start_time;
    }

    public function setStartTime(\DateTime $start_time): void
    {
        $this->start_time = $start_time;
    }

    public function getEndTime(): \DateTime
    {
        return $this->end_time;
    }

    public function setEndTime(\DateTime $end_time): void
    {
        $this->end_time = $end_time;
    }

    public function getTreatment(): ?Treatment
    {
        return $this->treatment;
    }

    public function setTreatment(Treatment $treatment): void
    {
        $this->treatment = $treatment;
    }

    public function getDayNumber(): int
    {
        return $this->dayNumber;
    }

    public function setDayNumber(int $dayNumber): void
    {
        $this->dayNumber = $dayNumber;
    }
}
