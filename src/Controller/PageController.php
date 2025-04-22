<?php

//permet de definir le chemin d'un fichier ou d'un dossier
//obligatoire, doit representer exactement le chemin du fichier
//en remplaçant le dossier src par App
namespace App\Controller;


// remplace le require_once
//on indique le namespace de la classe qu'on veut utiliser 
//et symfony va chercher le fichier automatiquement

use Symfony\Component\HttpFoundation\Response;
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
        // reesponse permet d'utiliser la fonction response de synfony
        // elle prend en parametre le contenu de la page et le code http
       return new Response('<p> page d\'accueil</p>', 200);
    }

   #[Route('/contact', name: 'contact')]
   public function contact(){
       return new Response('<p> page contact</p>', 200);
   }

   #[Route('/about', name:'about')]
   public function about(){
        return new Response('<p> page about</p>', 200);
    }
}


// récupère l'url demandée
// analayse l'url et récupère la fin ("/", ou "contact" etc)
// il regarde si dans tous les controleurs créés, il y a une fonction qui a une annotation Route
// avec la même url que celle demandée par l'utilisateur
// si oui, il execute la fonction en dessous de l'annotation :
// il va instancier automatiquement la classe : 
// $homeController = new HomeController
// $homeController->home();