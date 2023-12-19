<?php

namespace App\TreatmentProfile\Service;

use App\TreatmentProfile\Entity\TreatmentProfile;
use Doctrine\Persistence\ManagerRegistry;

class DeleteTreatmentProfile
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}

    public function DeleteTreatmentProfile(TreatmentProfile $treatmentProfile): void
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($treatmentProfile);
        $entityManager->flush();
    }

}