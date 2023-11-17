<?php

namespace App\PlannedStay\Repository;

use App\PlannedStay\Entity\PlannedStay;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

class PlannedStayRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(PlannedStay::class);
        parent::__construct($entityManager, $class);
    }

}