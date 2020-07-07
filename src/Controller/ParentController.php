<?php

namespace App\Controller;

use App\Entity\Children;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ParentController extends AbstractController
{
    /**
     * @Route("/parent", name="parent")
     */
    public function index()
    {
        return $this->render('parent/index.html.twig', [
            'controller_name' => 'ParentController',
        ]);
    }


    /**
     * @Route("/parentspace", name="parentespace")
     */
    public function ParentMainPage(ClubRepository $repoClub)
    {
       $clubs = $repoClub->findAll();
       dump($clubs);
        return $this->render('parent/mainPageParent.html.twig',
            ['clubs'=>$clubs]);
    }

    /**
    * @Route("/parentspace/{id}/inscrir", name="club_inscription")
    */
    public function club_inscription(Request $request,EntityManagerInterface $manager)
    {
    
    
     return $this->render ('parent/childInscription.html.twig') ;
    }

}
/*
$childss=new Children();
$form = $this->createFormBuilder($childss);
$form->add('name',TextType::class);
$form->add('lastName');
$form->add('age');
$form->add('telphone');
$form->add('adress');
$form->add('postalCode');
$form->getForm();

$form->handleRequest($request);
*/
