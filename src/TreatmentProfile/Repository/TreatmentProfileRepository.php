<?php

namespace App\TreatmentProfile\Repository;

use App\TreatmentProfile\Entity\TreatmentProfile;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class TreatmentProfileRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(TreatmentProfile::class);
        parent::__construct($entityManager, $class);
    }

}