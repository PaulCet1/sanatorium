<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
    /*
     * NOTICE:
     * We don't want to deploy composer.json that's being used to compute project dir, so we will specify it here manually.
     */
}
