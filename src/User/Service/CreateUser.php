<?php

namespace App\User\Service;

use App\User\Entity\User;
use App\User\ValueObject\UserVO;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CreateUser
{
    /** @var EntityManagerInterface * */
    private $entityManager;

    /** @var UserPasswordHasher * */
    private $userPasswordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->entityManager = $entityManager;
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function create(UserVO $userVO): void
    {
        $user = new User();
        $user->setEmail($userVO->email);
        $user->setUsername($userVO->username);
        $user->setFullname($userVO->fullname);
        $passwordHashed = $this->userPasswordHasher->hashPassword($user, $userVO->password);
        $user->setRoles($userVO->roles ?? []);
        $user->setPassword($passwordHashed);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
