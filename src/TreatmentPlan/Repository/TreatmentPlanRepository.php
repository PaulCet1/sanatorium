<?php

namespace App\TreatmentPlan\Repository;

use App\TreatmentPlan\Entity\TreatmentPlan;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class TreatmentPlanRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetaData(TreatmentPlan::class);
        parent::__construct($entityManager, $class);
    }

}