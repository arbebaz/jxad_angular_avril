<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends MyController
{
    #[Route('/', name: 'app_home')]
    public function index(ProduitsRepository $repoProduits, CategorieRepository $repoCategorie): Response
    {          

        $produits = $repoProduits->findAll(); 
        $categorie = $repoCategorie->findAll(); 


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'produits' => $produits,
            'categorie' => $categorie, 
        ]);
    }
}
