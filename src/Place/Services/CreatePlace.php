<?php

namespace App\Place\Services;

use App\Place\Entity\Place;
use Doctrine\Persistence\ManagerRegistry;

class CreatePlace
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function createPlace(Place $place)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($place);
        $entityManager->flush();
    }
}
