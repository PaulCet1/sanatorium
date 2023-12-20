<?php

namespace App\Reservation\Repositories;

use App\Reservation\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class ReservationRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(Reservation::class);
        parent::__construct($entityManager, $class);
    }

    public function getClientsByPlannedId($plannedId)
    {
        $qb = $this->createQueryBuilder('r')
            ->select('c.id, c.fullname')
            ->leftJoin('r.client', 'c')
            ->where('r.plannedStay = :plannedId')
            ->setParameter('plannedId', $plannedId);

        $results = $qb->getQuery()->getResult();

        $clients = [];
        foreach ($results as $result) {
            $clients[] = [
                'id' => $result['id'],
                'fullname' => $result['fullname'],
            ];
        }

        return $clients;
    }

    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.status = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getResult();
    }
}
