<?php

namespace App\TreatmentProfile\Controller;

use App\TreatmentProfile\Entity\TreatmentProfile;
use App\TreatmentProfile\Service\DeleteTreatmentProfile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Delete extends AbstractController
{
    public function __construct(
        private DeleteTreatmentProfile $deleteTreatmentProfile,
    ){}
    public function __invoke(TreatmentProfile $treatmentProfile)
    {
        $this->deleteTreatmentProfile->DeleteTreatmentProfile($treatmentProfile);
        return $this->redirectToRoute('treatment_profile_listing');
    }

}