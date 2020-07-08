<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Club;
use App\Entity\Manager;
use App\Repository\CategorieRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClubFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
       

        $manager1= new Manager();
        $manager1->setName("Salah");
        $manager1->setLastName("Benromdhane");
        $manager1->setAge(50);
        $manager1->setTelphone("96852741");
        $manager1->setAdress("7 rue tabarka");
        $manager1->setGovermnet("Beja");
        $manager1->SetPostalCode(1888);
        $manager1->setPassword("123456");
        $manager1->setRole("manager");
            
        $manager->persist( $manager1);

        $manager2= new Manager();
        $manager2->setName("Salma");
        $manager2->setLastName("ayed");
        $manager2->setAge(50);
        $manager2->setTelphone("9514723");
        $manager2->setAdress("7 rue tozeur");
        $manager2->setGovermnet("Tunis");
        $manager2->SetPostalCode(1992);
        $manager2->setPassword("123456");
        $manager2->setRole("manager");
            
        $manager->persist( $manager2);

        

        $categorieSport= new Categorie();
        $categorieSport->setActivityName("Sport");
        $categorieSport->setDescription("club sportive nataion , karaté , 
        football , bascketball");
        $manager->persist($categorieSport);

        $categorieCulture= new Categorie();
        $categorieCulture->setActivityName("Culturelle");
        $categorieCulture->setDescription("club Culturel Lecture , 
        Cinema ");
        $manager->persist($categorieCulture);

        $categorieLangue= new Categorie();
        $categorieLangue->setActivityName("Languistique");
        $categorieLangue->setDescription("club Languistique Anglais , 
        Francais , Allemand ");
        $manager->persist($categorieLangue);

        $club=new Club();

        $club->setName("Club Kids Sports");
        $club->setAdress("9 rue Sakietelzit");
        $club->setImage("https://image.shutterstock.com/z/
            stock-vector-kids-club-colorful-banner-caramel-
            text-on-abstract-background-poster-for-children-s-game-room-716933899.jpg");
        
        $club->addCategorie($categorieSport);
        $club->setGovermnet("tunis");
        $club->SetPostalCode(1222);
        $club->setManager( $manager1);

        $manager->persist($club);


        $club=new Club();

        $club->setName("Club Kids Culturelle");
        $club->setAdress("9 rue maroc");
        $club->setImage("https://image.shutterstock.com/z/stock-vector-kids-club-vector-logo-template-365515709.jpg");
        
        $club->addCategorie($categorieCulture);
        $club->setGovermnet("Sousse");
        $club->SetPostalCode(1555);
        $club->setManager( $manager2);

        $manager->persist($club);

        $club=new Club();

        $club->setName("Club Kids langue");
        $club->setAdress("9 rue hadi cheker");
        $club->setImage("https://image.shutterstock.com/z/stock-vector-kids-club-vector-logo-template-365515709.jpg");
        
        $club->addCategorie($categorieLangue);
        $club->setGovermnet("Kef");
        $club->SetPostalCode(1556);
        $club->setManager( $manager1);

        $manager->persist($club);
   


        $manager->flush();



       // $categorieLangue=$repoCategory->findById(2);

       /*
        $club=new Club();
        $club->setName("Club Kids langue");
        $club->setAdress("9 rue hadi cheker");
        $club->setImage("https://image.shutterstock.com/z/stock-vector-kids-club-vector-logo-template-365515709.jpg");
        
        $club->addCategorie($categorieLangue);
        $club->setGovermnet("Kef");
        $club->SetPostalCode(1556);
*/

       // $manager->persist($club);
     //   $manager->flush();
    }

}

