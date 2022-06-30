<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //création de la route de la page d'accueil
    /**
     * @Route("/", name="home")
     */

    // méthode pour renvoyer le fichier home.html.twig avec la variable 'name'
    public function home(){
        $name = 'Antoine';
        return $this->render('home.html.twig', [
            'name' => $name
        ]);
    }

    // Route vers la page des catégories
    /**
     * @Route ("/category", name="category")
     */
    // Méthode d'affichage des categories
    public function category(){
        // Tableau des catégories
        $category = [
            'title' => 'Politique',
            'color' => 'red',
            'published' => true,
            'description' => "Decrypter l'actualité politique avec le prisme de David Robert"
        ];
        return $this->render('category.html.twig', [
            'category' => $category
        ]);
    }
}