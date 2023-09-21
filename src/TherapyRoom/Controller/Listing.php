<?php

namespace App\TherapyRoom\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Listing
{

    public function __construct(
        private Environment $twig,
    ){}


    public function __invoke()
    {
        return new Response($this->twig->render('TherapyRoom/listing.twig'));
    }

}