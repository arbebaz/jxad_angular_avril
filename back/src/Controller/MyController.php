<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    protected CategorieRepository $repoCategorie; 

    public function __construct(CategorieRepository $repoCategorie)
    {
        $this->repoCategorie = $repoCategorie; 
        
    }

    protected function render(string $view, array $parameters = [], Response $response = null): Response { 
        $parameters['categorie'] = $this->repoCategorie->findAll();
        return parent::render($view, $parameters, $response);
    }
    
}



