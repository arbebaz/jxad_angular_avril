<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProduitsType;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MusiqueController extends MyController
{
    #[Route('/musique', name: 'app_musique')]
    public function index(ProduitsRepository $repoProduits, Request $request, EntityManagerInterface $manager): Response
    {

        $produits = $repoProduits->findAll();

        return $this->render('musique/index.html.twig', [
            'controller_name' => 'ProduitsController',
            'produits' => $produits,

        ]);
        return $this->render('musique/index.html.twig', [
            'controller_name' => 'MusiqueController',
        ]);
    }
}
