<?php

namespace App\Places\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Create
{

    public function __construct(
        private Environment $twig,
    ){}


    public function __invoke(){

        $content = $this->twig->render('Place/create.twig');
        return new Response($content);
    }

}