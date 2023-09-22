<?php

namespace App\TherapyRoom\Repository;

use App\TherapyRoom\Entity\TherapyRoom;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

class TherapyRoomRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(TherapyRoom::class);
        parent::__construct($entityManager, $class);
    }

}