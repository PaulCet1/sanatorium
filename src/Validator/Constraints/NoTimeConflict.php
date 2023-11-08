<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NoTimeConflict extends Constraint
{
    public $message = 'There is already a treatment planned for this time.';
}