<?php

namespace App\Controller;

use App\Entity\Children;
use App\Entity\CompteClub;
use App\Entity\ParentChild;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("/spaceparent", name="spaceparent")
     */

    public function ParentMainPage(ClubRepository $repoClub)
    {
        $clubs = $repoClub->findAll();
        return $this->render(
            'parent/mainPageParent.html.twig',
            ['clubs' => $clubs]
        );
    }


    /**
     * @Route("/parentspace/{id}/inscrir", name="club_inscription")
     */
    public function club_inscription(
        Request $request,
        EntityManagerInterface $manager,
        ClubRepository $repoClub,
        $id
    ) {

        if ($request->request->count() > 2) {
            $club = $repoClub->findOneById($id);
            dump($club);
            $child = new Children();

            $child->setName($request->request->get('Nom'));
            $child->setLastName($request->request->get('Prenom'));
            $child->setAge($request->request->get('Age'));
            $child->setTelphone($request->request->get('Telephone'));
            $child->setAdress($request->request->get('Adresse'));
            $child->setGovermnet($request->request->get('Gouvernerat'));
            $child->SetPostalCode($request->request->get('CodePostal'));
            $child->setRole("children");

            $compteClub = new CompteClub();
            $compteClub->setMonthlyBill($request->request->get("Payemenbt"));
            $compteClub->setEnfant($child);
            $compteClub->setClub($club);

            $manager->persist($child);
            $manager->persist($compteClub);

            $manager->flush();

            return $this->redirectToRoute('spaceparent');
        }


        return $this->render('parent/childInscription.html.twig');
    }

    /**
     * @Route("/inscriptionparent", name="parentespace")
     */
    public function Inscriptionparent( Request $request, EntityManagerInterface $manager)
    {
        if ($request->request->count() > 2) {
           
            $parent = new ParentChild();

            $parent->setName($request->request->get('Nom'));
            $parent->setLastName($request->request->get('Prenom'));
            $parent->setAge($request->request->get('Age'));
            $parent->setTelphone($request->request->get('Telephone'));
            $parent->setAdress($request->request->get('Adresse'));
            $parent->setGovermnet($request->request->get('Gouvernerat'));
            $parent->SetPostalCode($request->request->get('CodePostal'));
            $parent->setPassword($request->request->get('Password'));
            $parent->setRole("parent");

            $manager->persist($parent);
            $manager->flush();

            return $this->redirectToRoute('spaceparent');

        }

        return $this->render('parent/InscriptionParent.html.twig');
    }
}
