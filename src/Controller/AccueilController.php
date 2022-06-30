<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */

    public function accueil(){
        $name = 'Antoine';
        return $this->render('accueil.html.twig', [
            'name' => $name
        ]);
    }
}