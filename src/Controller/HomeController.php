<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        echo "<h1>Bienvenue sur ma home page </h1>";
        return $this->render('home/index.html.twig', [
                'controller_name' => 'NTCHANGA',
                'controller_prenom' => 'Georges',
                'controller_adresse' => '3 rue du louve',
                'controller_mail' => 'gadyber6@gmail.com',
                'controller_path' => 'https://www.php.net/'
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
        
    {   echo "<h1>Bienvenue sur ma PROFIL-PAGE </h1>";
        return $this->render('home/index.html.twig', $tableau = [
                'controller_name' => 'NTCHANGA',
                'controller_prenom' => 'Georges',
                'controller_adresse' => '3 rue du louve',
                'controller_mail' => 'gadyber6@gmail.com',
                'controller_path' => 'https://www.php.net/'
            
        ]);
    }

    

}
