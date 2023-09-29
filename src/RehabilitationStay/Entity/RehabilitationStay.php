<?php

namespace App\RehabilitationStay\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity()
 * @ORM\Table(name="rehabilitation_stay")
 */
class RehabilitationStay
{
    public function __construct()
    {
        $this->treatments = new ArrayCollection();
        $this->created = new \DateTime();
    }
    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\Column(type="datetime")
     * @Assert\LessThanOrEqual(propertyPath="end_date", message="Data rozpoczęcia nie może być późniejsza niż data zakończenia.")
     */
    private $start_date;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThanOrEqual(propertyPath="start_date", message="Data zakończenia nie może być wcześniejsza niż data rozpoczęcia.")
     */
    private $end_date;

    /**
     * @ORM\ManyToMany(targetEntity="App\Treatment\Entity\Treatment", inversedBy="rehabilitationStays")
     * @ORM\JoinTable(name="rehabilitation_stay_treatment")
     */
    private $treatments;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStartDate(): \DateTime
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTime $start_date): void
    {
        $this->start_date = $start_date;
    }

    public function getEndDate(): \DateTime
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTime $end_date): void
    {
        $this->end_date = $end_date;
    }

    public function getTreatments(): Collection
    {
        return $this->treatments;
    }

    // Setter dla $treatments
    public function setTreatments(Collection $treatments): void
    {
        $this->treatments = $treatments;
    }






}