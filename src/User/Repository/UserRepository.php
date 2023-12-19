<?php

namespace App\User\Repository;

use App\User\Entity\User;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
class UserRepository extends EntityRepository
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(User::class);
        parent::__construct($entityManager, $class);
    }

    public function searchByUsername($term)
    {
        return $this->createQueryBuilder('u')
            ->where('u.fullname LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->getQuery()
            ->getResult();
    }



}