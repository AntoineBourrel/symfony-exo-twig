<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */

    public function home(){
        $name = 'Antoine';
        return $this->render('home.html.twig', [
            'name' => $name
        ]);
    }
}