<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParoleController extends AbstractController
{
    #[Route('/parole', name: 'app_parole')]
    public function index(ProduitsRepository $repoProduits, Request $request, EntityManagerInterface $manager): Response
    {

        $produits = $repoProduits->findAll();

        return $this->render('parole/index.html.twig', [
            'controller_name' => 'ProduitsController',
            'produits' => $produits,

        ]);
        return $this->render('parole/index.html.twig', [
            'controller_name' => 'ParoleController',
        ]);
    }
}
