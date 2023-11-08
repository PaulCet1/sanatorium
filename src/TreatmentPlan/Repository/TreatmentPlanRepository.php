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

    public function findByRehabilitationStayId(int $rehabilitationStayId): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.rehabilitationStay = :id')
            ->setParameter('id', $rehabilitationStayId)
            ->getQuery()
            ->getResult();
    }

    public function findConflictingPlans(int $rehabilitationStayId, \DateTimeInterface $startTime, \DateTimeInterface $endTime): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.rehabilitationStay = :rehabilitationStayId')
            ->andWhere('t.start_time < :endTime AND t.end_time > :startTime')
            ->setParameters([
                'rehabilitationStayId' => $rehabilitationStayId,
                'startTime' => $startTime,
                'endTime' => $endTime,
            ])
            ->getQuery()
            ->getResult();
    }
}