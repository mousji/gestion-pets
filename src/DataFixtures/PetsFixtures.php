<?php

namespace App\DataFixtures;

use App\Entity\Continent;
use App\Entity\Family;
use App\Entity\Pet;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PetsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $c1 = new  Continent();
        $c1->setLib("Europe");
        $manager->persist($c1);

        $c2 = new  Continent();
        $c2->setLib("Asian");
        $manager->persist($c2);


        $c3 = new  Continent();
        $c3->setLib("Africa");
        $manager->persist($c3);



        $c4 = new  Continent();
        $c4->setLib("Australia");
        $manager->persist($c4);

        $c5 = new  Continent();
        $c5->setLib("America");
        $manager->persist($c5);









        $f1 = new Family();
        $f1->setLib("Félins")
            ->setDescription("The Felidae or Felines are a family of 
               placental mammals of the order Carnivora 
               and the suborder Feliforms.");

        $manager->persist($f1);


        $f2 = new Family();
        $f2->setLib("Canidés")
            ->setDescription("Les Canidés forment une famille basale
                    des mammifères caniformes appartenant àl'ordre des Carnivora,
                    et comprenant les loups, les chiens, les chacals ou les renards");


        $manager->persist($f2);



        $f3 = new Family();
        $f3->setLib("Horses")
            ->setDescription("
               The Equidae form a family of mammals with several dozen fossil genera,
                and seven current wild species belonging to a single genus
               , Equus. The species of this family are horses, donkeys and zebras.");


        $manager->persist($f3);

        $p1 = new Pet();
        $p1->setNom("dog")
            ->setDescription(" this dog nice")
            ->setImage("dog.png")
            ->setPoids(8)
            ->setDangerous(true)
            ->setFamily($f2)
            ->addContinent($c1)
            ->addContinent($c2);

        $manager->persist($p1);

        $p2 = new Pet();
        $p2->setNom("cat")
            ->setDescription(" this cat nice")
            ->setImage("cats.png")
            ->setPoids(5)
            ->setDangerous(false)
            ->setFamily($f1)
            ->addContinent($c5)
            ->addContinent($c2);

        $manager->persist($p2);

        $p3 = new Pet();
        $p3->setNom("hourse")
            ->setDescription(" this hourse nice")
            ->setImage("horse.png")
            ->setPoids(150)
            ->setDangerous(false)
            ->setFamily($f3)
            ->addContinent($c3)
            ->addContinent($c4);

        $manager->persist($p3);


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}