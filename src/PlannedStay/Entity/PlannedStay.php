<?php
namespace App\PlannedStay\Entity;


use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="planned_stay")
 */
class PlannedStay
{
    public function __construct()
    {
        $this->created = new \DateTime();
    }

    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\ManyToOne(targetEntity=RehabilitationStay::class)
     * @ORM\JoinColumn(name="rehabilitationStay_id", referencedColumnName="id")
     */
    private $rehabilitation_stay;

    /**
     * @ORM\Column(type="datetime")
    */
    private $start_date;


    /**
     * @ORM\Column(type="datetime", nullable=true)
    */
    private $end_date;

    public function getRehabilitationStay(): ?RehabilitationStay
    {
    return $this->rehabilitation_stay;
    }

    public function setRehabilitationStay(RehabilitationStay $rehabilitationStay): void
    {
    $this->rehabilitation_stay = $rehabilitationStay;
    }

    public function getStartDate(): \DateTime
    {
    return $this->start_date;
    }

    public function setStartDate(\DateTime $start_date): void
    {
    $this->start_date = $start_date;
    //$this->updateEndDate();
    }

    public function getEndDate(): ?\DateTime
    {
    return $this->end_date;
    }

    public function setEndDate(\Datetime $end_date):void
    {
        $this->end_date=$end_date;
    }

}
