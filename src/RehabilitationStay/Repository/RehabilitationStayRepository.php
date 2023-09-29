<?php

namespace App\RehabilitationStay\Repository;

use App\RehabilitationStay\Entity\RehabilitationStay;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class RehabilitationStayRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(RehabilitationStay::class);
        parent::__construct($entityManager, $class);
    }

}