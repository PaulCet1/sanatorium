<?php

namespace App\Core\Entity\TraitSpace;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait CreatedTrait
{
    /**
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->created = new \DateTime('now');
    }
}
