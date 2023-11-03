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
     * @ORM\Column(type="integer")
     */
    private $duration;


    /**
     * @ORM\ManyToMany(targetEntity="App\Treatment\Entity\Treatment", inversedBy="rehabilitationStays")
     * @ORM\JoinTable(name="rehabilitation_stay_treatment")
     */
    private $treatments;

    /**
     * @ORM\ManyToMany(targetEntity="App\Treatment\Entity\Treatment", inversedBy="rehabilitationStays")
     * @ORM\JoinTable(name="rehabilitation_stay_treatment")
     */

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }



    public function getTreatments(): Collection
    {
        return $this->treatments;
    }


    public function setTreatments(Collection $treatments): void
    {
        $this->treatments = $treatments;
    }






}