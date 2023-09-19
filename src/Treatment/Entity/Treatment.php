<?php

namespace App\Treatment\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
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
}
