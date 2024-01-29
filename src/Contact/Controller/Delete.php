<?php

namespace App\Contact\Controller;

use App\Contact\Entity\Contact;
use App\Contact\Service\DeleteContact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RedirectResponse;


class Delete extends AbstractController
{
    public function __construct(
        private readonly DeleteContact $deleteContact,
    ){
    }

    /**
     * @IsGranted("ROLE_ADMIN", message="You do not have access to this resource")
     */
    public function __invoke(Contact $contact): RedirectResponse
    {
        $this->deleteContact->DeleteContact($contact);
        $this->addFlash('success', 'Kontakt został usunięty pomyślnie');


        return $this->redirectToRoute('contact_listing');
    }
}