<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InstrumentalController extends AbstractController
{
    #[Route('/instrumental', name: 'app_instrumental')]

    public function index(ProduitsRepository $repoProduits, Request $request, EntityManagerInterface $manager): Response
    {

        $produits = $repoProduits->findAll();

        return $this->render('instrumental/index.html.twig', [
            'controller_name' => 'InstrumentalController',
            'produits' => $produits,
        ]);
    }
}
