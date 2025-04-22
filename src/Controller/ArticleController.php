<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ArticleController{

    #[Route ('/list-articles', name: 'list_articles')]
    public function listArticles()
    {
        var_dump('Liste des articles');die;
    }

    #[Route('/create-article', name: 'create_article')]
    public function createArticle()
    {

        var_dump('Créer un article');die;
    }

    #[Route('delete-article', name: 'delete-article')]
    public function deleteArticle(){
        var_dump('Supprimer un article');die;
    }
}