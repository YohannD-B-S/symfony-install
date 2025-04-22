<?php


//permet de definir le chemin d'u fichier ou d'un dossier
//obligatoire, doit representer exactement le chemin du fichier
//en remplaçant le dossier src par App
namespace App\Controller;


// // remplace le require_once
// //on indique le namespace de la classe qu'on veut utiliser
use Symfony\Component\Routing\Annotation\Route;


// je cree une class ArticleController
// qui va gérer les articles
class ArticleController{

    //je cree une methode qui va afficher la liste des articles
    #[Route ('/list-article', name: 'list_articles')]
    public function listArticles()
    {
        var_dump('Liste des articles');die;
    }


    //je creer une methode qui va permetre de créer un article
    #[Route('/create-article', name: 'create_article')]
    public function createArticle()
    {

        var_dump('Créer un article');die;
    }

    //je creer une function qui permettra de supprimer un article
    #[Route('delete-article', name: 'delete-article')]
    public function deleteArticle(){
        var_dump('Supprimer un article');die;
    }
}