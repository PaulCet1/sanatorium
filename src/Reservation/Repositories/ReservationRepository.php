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

}