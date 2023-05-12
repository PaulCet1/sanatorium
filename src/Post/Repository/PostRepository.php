<?php

namespace App\Post\Repository;

use Doctrine\ORM\EntityRepository;
use DateTime;


class PostRepository extends EntityRepository {
    
    public function getByDates(DateTime $startDate, DateTime $endDate) {
        $query = $this->createQueryBuilder('p')
                ->addSelect('pl')
                ->leftJoin('p.postLike', 'pl')
                ->where('(p.created > :startDate AND p.created < :endDate)')
                ->setParameter('startDate', $startDate->format('Y-m-d H:i:s'))
                ->setParameter('endDate', $endDate->format('Y-m-d H:i:s'))
                ->getQuery();
                
                return $query->getResult();
                
    }
}
