<?php

namespace App\RehabilitationStay\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use App\TreatmentProfile\Entity\TreatmentProfile;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 *
 * @ORM\Table(name="rehabilitation_stay")
 */
class RehabilitationStay
{
    use IdTrait;
    use CreatedTrait;

    public function __construct()
    {
        $this->treatments = new ArrayCollection();
        $this->created = new \DateTime();
    }

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
     *
     * @ORM\JoinTable(name="rehabilitation_stay_treatment")
     */
    private $treatments;

    /**
     * @ORM\ManyToOne(targetEntity=TreatmentProfile::class)
     *
     * @ORM\JoinColumn(name="treatment_profile_id", referencedColumnName="id")
     */
    private $treatmentProfile;

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

    public function getTreatmentProfile(): ?TreatmentProfile
    {
        return $this->treatmentProfile;
    }

    public function setTreatmentProfile(TreatmentProfile $treatmentProfile): void
    {
        $this->treatmentProfile = $treatmentProfile;
    }
}
