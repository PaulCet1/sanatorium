<?php

namespace App\DataFixtures;

use App\Place\Entity\Place;
use App\User\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setUsername('admin');
        $user->setFullname('Admin Administrator');
        $user->setPassword('$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym');
        $user->setRoles(['ROLE_ADMIN']);

        $manager->persist($user);
        $manager->flush();


        // Tworzenie użytkowników
        for ($i = 0; $i < 500; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setUsername($faker->userName);
            $user->setFullname($faker->name);
            $user->setPassword('$2y$13$v.7JQoPJwPfjHm0nmcMNCONovju7G/wt8ZJ3psqUcuRkkGjg/Aeym');

            $manager->persist($user);
        }

        $manager->flush();


        for($i = 0; $i < 150; $i++){
            $place = new Place();
            $place->setName($faker->sentence(3));
            $place->setPlace($faker->city);
            $place->setPostCode($faker->postcode);

            $manager->persist($place);
        }
        $manager->flush();
    }
}
