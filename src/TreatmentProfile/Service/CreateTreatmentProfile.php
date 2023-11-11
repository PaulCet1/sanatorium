<?php

namespace App\TreatmentProfile\Service;

use App\TreatmentProfile\Entity\TreatmentProfile;
use Doctrine\Persistence\ManagerRegistry;

class CreateTreatmentProfile
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function createTreatmentProfile(TreatmentProfile $treatmentProfile)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($treatmentProfile);
        $entityManager->flush();
    }

}