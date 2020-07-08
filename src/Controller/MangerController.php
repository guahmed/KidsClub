<?php

namespace App\Controller;

use App\Entity\Club;
use App\Entity\CompteClub;
use App\Entity\Manager;
use App\Repository\CategorieRepository;
use App\Repository\ClubRepository;
use App\Repository\CompteClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MangerController extends AbstractController
{


    /**
     * @Route("/paymenntBill/{id}", name="payement")
     */
    public function paymenntBill(CompteClubRepository $repoClubCompte,$id,EntityManagerInterface $manager)
    {

        $bill=$repoClubCompte->findOneById($id);
        $bill->setPaymentStatus("Payé");

        $manager->persist($bill);
        $manager->flush();

         return $this->redirectToRoute('managerhome');
        }
    /**
     * @Route("/managerhome", name="managerhome")
     */
    public function managerhome(ClubRepository $repoClub,CompteClubRepository $repoCompteClub,Request $request)
    {


        $tab_Id=array();
        $tabCompteClub=array();

        $clubs=$repoClub->findByManager(5);
        $bill=$repoCompteClub->findByClub(2);
        //dump($bill);

        dump($request);
        /*
        foreach( $clubs as $club){
           array_push($tab_Id, $club->getId());
            $info=$club->getCompteClubs();
           array( $tabCompteClub,$repoCompteClub->findOneByClub(2))

           
        //  dump($info);
            }
            $bill=$repoCompteClub->findByClub(2);
            dump($bill);
        
        */



         return $this->render('manager/mainPageManager.html.twig',['bills'=>$bill]);

        }

    /**
     * @Route("/inscriptionmanager", name="inscription")
     */
    public function inscriptionManager(Request $request,EntityManagerInterface $manager)
    {
      

       // $club=$clubrepo->findByManager(5);
       // dump($club);
        if ($request->request->count() > 2) {
           
            $parent = new Manager();

            $parent->setName($request->request->get('Nom'));
            $parent->setLastName($request->request->get('Prenom'));
            $parent->setAge($request->request->get('Age'));
            $parent->setTelphone($request->request->get('Telephone'));
            $parent->setAdress($request->request->get('Adresse'));
            $parent->setGovermnet($request->request->get('Gouvernerat'));
            $parent->SetPostalCode($request->request->get('CodePostal'));
            $parent->setPassword($request->request->get('Password'));
            $parent->setRole("manager");

            $manager->persist($parent);
            $manager->flush();

            return $this->redirectToRoute('spaceparent');

        }

        return $this->render('manager/InscriptionManager.html.twig');
    }
    }

