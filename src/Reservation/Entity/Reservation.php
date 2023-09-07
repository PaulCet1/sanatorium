<?php
namespace App\Reservation\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Core\Entity\TraitSpace\IdTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    use IdTrait;
    use CreatedTrait;



}