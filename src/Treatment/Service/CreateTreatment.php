<?php

namespace App\Treatment\Service;

use App\Treatment\Entity\Treatment;
use Doctrine\Persistence\ManagerRegistry;

class CreateTreatment
{

    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function createTreatment(Treatment $treatment)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($treatment);
        $entityManager->flush();
    }

}