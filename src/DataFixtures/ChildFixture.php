<?php

namespace App\DataFixtures;

use App\Entity\Children;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ChildFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

    
        $manager->flush();
    }
}
