<?php

//permet de definir le chemin d'un fichier ou d'un dossier
//obligatoire, doit representer exactement le chemin du fichier
//en remplaçant le dossier src par App
namespace App\Controller;


// remplace le require_once
//on indique le namespace de la classe qu'on veut utiliser 
//et symfony va chercher le fichier automatiquement

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

//Je cree une class HomeController
class PageController extends AbstractController{

    // Je cree une methode home qui va afficher la page d'accueil
    // Je lui donne une annotation Route /home et je l'appelle home
    // Je lui donne un nom home
    //je fais un var_dump de la page d'accueil et je fais un die pour arreter le script
    #[Route('/', name: 'home')]
    public function home()
    {
        // return $this->render('home.html.twig');
        // $this->render() va chercher le fichier home.html.twig dans le dossier templates
        // et va l'afficher dans la page d'accueil
        // et les afficher dans le fichier home.html.twig
       return $this->render('home.html.twig');
    }

   #[Route('/contact', name: 'contact')]
   public function contact(){
      return $this->render('contact.html.twig');
   }

   #[Route('/about', name:'about')]
   public function about(){
        return $this->render('about.html.twig');
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