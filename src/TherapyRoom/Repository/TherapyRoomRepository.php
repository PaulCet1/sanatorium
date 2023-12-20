<?php

namespace App\TherapyRoom\Repository;

use App\TherapyRoom\Entity\TherapyRoom;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class TherapyRoomRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(TherapyRoom::class);
        parent::__construct($entityManager, $class);
    }
}
