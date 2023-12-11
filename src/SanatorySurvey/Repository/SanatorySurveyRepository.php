<?php

namespace App\SanatorySurvey\Repository;

use App\SanatorySurvey\Entity\SanatorySurvey;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class SanatorySurveyRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(SanatorySurvey::class);
        parent::__construct($entityManager, $class);
    }

}