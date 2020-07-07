<?php

namespace App\DataFixtures;

use App\Entity\Children;
use App\Entity\ParentChild;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Parent_;

class ChildFixture extends Fixture
{
    
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        


    
       // $manager->flush();
    }
}
