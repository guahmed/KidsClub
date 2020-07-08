<?php

namespace App\DataFixtures;

use App\Entity\ParentChild as EntityParentChild;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ParentChild extends Fixture
{

    private $name = array("Ali","Mohamed","Fatma");
    private $lastName = array("Idoudi","Benothman","Benromdhane");
    private $age = array(40,41,42);
    private $telephone = array("52555888","51355512","98551234");
    private $adress = array("9 Rue FarhatHachad","10 Rue MahmoudMatri","4 Rue Algerie");
    private $gouvernerat = array("Tunis","Sousse","Bierte");
    private $codePostale = array(2000,1999,2015);

    public function load(ObjectManager $manager)
    {
        
        for ( $i=0; $i<3 ;$i++)
        {
            $parent= new EntityParentChild();
            $parent->setName($this->name[$i]);
            $parent->setLastName($this->lastName[$i]);
            $parent->setAge($this->age[$i]);
            $parent->setTelphone($this->telephone[$i]);
            $parent->setAdress($this->adress[$i]);
            $parent->setGovermnet($this->gouvernerat[$i]);
            $parent->SetPostalCode($this->codePostale[$i]);
            $parent->setPassword("123456");
            $parent->setRole("parent");
            
            $manager->persist( $parent);
        }
       
        $manager->flush();

      
    }
}
