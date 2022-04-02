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
            ->setImage("dog.png");

        $manager->persist($p1);

        $p2 = new Pet();
        $p2->setNom("cat")
            ->setDescription(" this cat nice")
            ->setImage("cat.png");

        $manager->persist($p2);

        $p3 = new Pet();
        $p3->setNom("hourse")
            ->setDescription(" this hourse nice")
            ->setImage("hourse.png");

        $manager->persist($p3);


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}