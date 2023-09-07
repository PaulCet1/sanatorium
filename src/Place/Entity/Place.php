<?php

namespace App\Place\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="places")
 */

class Place
{
    public function __construct()
    {
        $this->postcode = "";
        $this->created = new \DateTime();
    }

    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */

    private $place;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */

    private $postcode;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    public function getPlace():string
    {
        return $this->place;
    }

    public function setPostCode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    public function getPostCode():string
    {
        return $this->postcode;
    }


}