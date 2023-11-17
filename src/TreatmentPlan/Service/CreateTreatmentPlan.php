<?php

namespace App\TreatmentPlan\Service;

use App\TreatmentPlan\Entity\TreatmentPlan;
use Doctrine\Persistence\ManagerRegistry;

class CreateTreatmentPlan
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ){}


    public function CreateTreatmentPlan(TreatmentPlan $treatmentPlan)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($treatmentPlan);
        $entityManager->flush();
    }

}