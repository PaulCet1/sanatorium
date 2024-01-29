<?php

namespace App\Contact\Service;

use App\Contact\Entity\Contact;
use Doctrine\Persistence\ManagerRegistry;

class DeleteContact
{
    public function __construct(
      private readonly ManagerRegistry $doctrine,
    ){
    }

    public function DeleteContact(Contact $contact)
    {
        $entityManager = $this->doctrine->getManager();
        $entityManager->remove($contact);
        $entityManager->flush();
    }

}