<?php

namespace App\DataFixtures;

use App\Entity\Pet;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PetsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $p1 = new Pet();
        $p1->setNom("dog")
            ->setDescription(" this dog nice")
            ->setImage("dog.png")
            ->setPoids(8)
            ->setDangerous(true);

        $manager->persist($p1);

        $p2 = new Pet();
        $p2->setNom("cat")
            ->setDescription(" this cat nice")
            ->setImage("cats.png")
            ->setPoids(5)
            ->setDangerous(false);

        $manager->persist($p2);

        $p3 = new Pet();
        $p3->setNom("hourse")
            ->setDescription(" this hourse nice")
            ->setImage("horse.png")
            ->setPoids(150)
            ->setDangerous(false);

        $manager->persist($p3);


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}