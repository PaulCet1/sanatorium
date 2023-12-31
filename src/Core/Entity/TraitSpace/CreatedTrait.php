<?php

namespace App\Core\Entity\TraitSpace;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CreatedTrait.
 */
trait CreatedTrait
{
    /**
     * @ORM\Column(name="created", type="datetime")
     */
    private \DateTime $created;

    /**
     * Get created date.
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * Set created date.
     *
     * @ORM\PrePersist
     */
    public function onPrePersist(): void
    {
        $this->created = new \DateTime('now');
    }
}
