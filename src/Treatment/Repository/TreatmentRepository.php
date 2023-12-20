<?php

namespace App\Treatment\Repository;

use App\Treatment\Entity\Treatment;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class TreatmentRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(Treatment::class);
        parent::__construct($entityManager, $class);
    }
}
