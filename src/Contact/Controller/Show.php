<?php

namespace App\Contact\Controller;

use App\Contact\Repository\ContactRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class Show
{
    public function __construct(
        private Environment       $twig,
        private ContactRepository $roomRepository,
    )
    {
    }

    /**
     * @IsGranted("ROLE_ADMIN", message="You do not have access to this resource")
     */
    public function __invoke($id): Response
    {
        return new Response($this->twig->render('Contact/show.twig', [
            'contact' => $this->roomRepository->find($id),
        ]));
    }

}