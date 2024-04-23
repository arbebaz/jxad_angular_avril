<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionsLegalesController extends MyController
{
    #[Route('/mentions/legales', name: 'app_mentions_legales')]
    public function index(): Response
    {
        return $this->render('mentions_legales/index.html.twig', [
            'controller_name' => 'MentionsLegalesController',
        ]);
    }

    #[Route('/mentions/legales/cgv', name: 'app_cgv')]
    public function cgv(): Response
    {
        return $this->render('mentions_legales/CGU.html.twig', [
            'controller_name' => 'CGVController',
        ]);
    }

    #[Route('/mentions/legales/cgu', name: 'app_cgu')]
    public function cgu(): Response
    {
        return $this->render('mentions_legales/CGU.html.twig', [
            'controller_name' => 'CGUController',
        ]);
    }
}
