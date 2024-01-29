<?php

namespace App\Contact\Repository;

use App\Contact\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class ContactRepository extends EntityRepository
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        $class = $entityManager->getClassMetadata(Contact::class);
        parent::__construct($entityManager, $class);
    }

}