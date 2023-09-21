<?php

namespace App\TherapyRoom\Entity;

use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="therapy_room")
 */
class TherapyRoom
{

    use IdTrait;
    use CreatedTrait;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $session;

    /**
     * @ORM\Column(type="integer", unique=false)
     */
    private $attendance_limit;


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setSession(string $session): void
    {
        $this->session = $session;
    }

    public function getSession():string
    {
        return $this->session;
    }

    public function setAttendanceLimit(int $attendance_limit): void
    {
        $this->attendance_limit = $attendance_limit;
    }

    public function getAttendanceLimit(): int
    {
        return $this->attendance_limit;
    }
}