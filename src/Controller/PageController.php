<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;




//Je cree une class HomeController
class PageController{

    // Je cree une methode home qui va afficher la page d'accueil
    // Je lui donne une annotation Route /home et je l'appelle home
    // Je lui donne un nom home
    //je fais un var_dump de la page d'accueil et je fais un die pour arreter le script
    #[Route('/', name: 'home')]
    public function home()
    {
        var_dump('page accueil');die;
    }

   #[Route('/contact', name: 'contact')]
   public function contact(){
       var_dump('page contact');die;
   }

   #[Route('/about', name:'about')]
   public function about(){
       var_dump('page about');die;
   }
}