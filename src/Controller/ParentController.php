<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function ParentMainPage()
    {
        return $this->render('parent/mainPageParent.html.twig');
    }
}
