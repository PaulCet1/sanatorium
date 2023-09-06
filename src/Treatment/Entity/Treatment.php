<?php

namespace App\Treatment\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="treatment)
 */
class Treatment
{
    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $leading_person;

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function getLeadingPerson():string
    {
        return $this->leading_person;
    }

    public function setLeadingPerson(string $leading_person):void
    {
        $this->name = $leading_person;
    }


}