<?php

namespace App\Room\Repository;

use App\Room\Entity\Room;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class RoomRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(Room::class);
        parent::__construct($entityManager, $class);
    }

}