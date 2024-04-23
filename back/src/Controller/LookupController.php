<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LookupController extends MyController
{
    #[Route('/lookup', name: 'app_lookup')]
    public function index(Request $request, ProduitsRepository $repoProduits): Response
    {

        $search = $request->query->get('search'); 
        $produits = $repoProduits->findBySearch($search);

        
        return $this->render('lookup/index.html.twig', [
            'controller_name' => 'LookupController',
            'produits' => $produits
        ]);
    }
}
