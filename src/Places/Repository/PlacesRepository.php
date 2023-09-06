<?php

namespace App\Places\Repository;

use App\Places\Entity\Places;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class PlacesRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(Places::class);
        parent::__construct($entityManager, $class);
    }

}