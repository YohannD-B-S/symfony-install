<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;




//Je cree une class HomeController
class HomeController{

    // Je cree une methode home qui va afficher la page d'accueil
    // Je lui donne une route /home et je l'appelle home
    // Je lui donne un nom home
    //je fais un var_dump de la page d'accueil et je fais un die pour arreter le script
    #[Route('/home', name: 'home')]
    public function home()
    {
        var_dump('page accueil');die;
    }
}