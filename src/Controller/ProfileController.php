<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{

    #[Route('/profil', name: 'profil')]

    public function profil()
{
    $profils = [
    
            "firstName" => "David",
            "lastName" => "Robert",
            "job" => "Web dev",
            "languages" => ["JS", "PHP", "TS"],
            "avatar" => "https://f.hellowork.com/obs-static-images/seo/ObsJob/developpeur-web.jpg",
            "looksForJob" => false
 
    ];

    return $this->render('profil.html.twig', [
        'profils' => $profils
    ]);
}
}