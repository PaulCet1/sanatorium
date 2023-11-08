<?php

namespace App\Validator\Constraints;

use App\TreatmentPlan\Entity\TreatmentPlan;
use App\TreatmentPlan\Repository\TreatmentPlanRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class NoTimeConflictValidator extends ConstraintValidator
{
    public function __construct(
        private TreatmentPlanRepository $treatmentPlanRepository,
    ){}


    public function validate($value, Constraint $constraint)
    {
        if (!$value instanceof TreatmentPlan) {
            return;
        }

        $rehabilitationStayId = $value->getRehabilitationStay()->getId();
        $startTime = $value->getStartTime();
        $endTime = $value->getEndTime();

        $conflictingPlans = $this->treatmentPlanRepository->findConflictingPlans($rehabilitationStayId, $startTime, $endTime);

        if (count($conflictingPlans) > 0) {
            $this->context->buildViolation($constraint->message)->addViolation();
        }
    }

}