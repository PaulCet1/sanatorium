<?php

namespace App\Place\Repository;

use App\Place\Entity\Place;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class PlacesRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(Place::class);
        parent::__construct($entityManager, $class);
    }
}
