<?php

namespace App\Treatment\Controller;

use App\Treatment\Entity\Treatment;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class Delete extends AbstractController
{
    public function __construct(
        private ManagerRegistry $doctrine,
    ) {
    }

    public function __invoke(Request $request, Treatment $treatment)
    {
        $em = $this->doctrine->getManager();
        $em->remove($treatment);
        $em->flush();

        $this->addFlash('success', 'Element został usunięty');

        return $this->redirectToRoute('treatment_listing');
    }
}
