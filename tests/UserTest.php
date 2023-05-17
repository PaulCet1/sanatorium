<?php

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\User\Entity\User;
use Faker\Factory as FakerFactory;

class UserTest extends KernelTestCase
{
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
    }

    public function testCreateUser()
    {
        $faker = FakerFactory::create();

        $user = new User();
        $user->setUsername($faker->userName);
        $user->setEmail($faker->email);
        $user->setPassword($faker->password);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->assertNotNull($user->getId());
    }
}
