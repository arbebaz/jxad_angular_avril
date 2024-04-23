<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends MyController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(CategorieRepository $repoCategorie, Request $request, EntityManagerInterface $manager): Response
    {
        $categorie = $repoCategorie->findAll(); 

        $categories = new Categorie(); 

        $form =$this->createForm(CategorieType::class, $categories); 

        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($categories); 

            $manager->flush(); 

            $this->addFlash('Success', "La catégorie " . $categories->getId() . " à bien été ajoutée ! 😎");

            return $this->redirectToRoute("app_categorie"); 
        }

        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
            'categorie' => $categorie, 
            'FormCategorie' => $form->createView()
        ]);
    }


    // Update 
    #[Route('/categorie_update/{id}', name: 'categorie_update')]

    public function categorie_update(Categorie $categorie, Request $request, EntityManagerInterface $manager)
    {

        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($categorie);
            $manager->flush();

            $this->addFlash("Succès", "La catégorie N°" . $categorie->getId() . "a bien été modifée");

            return $this->redirectToRoute('app_categorie');
        }

        return $this->render("categorie/categorie_update.html.twig", [
            'controller_name' => 'CategorieUpdateController',
            "FormCategorie" => $form->createView(),
            "categorie" => $categorie
        ]);
    }


    // Delete 
    #[Route('/categorie_delete/{id}', name: 'categorie_delete')]

    public function categorie_delete(Categorie $categorie, EntityManagerInterface $manager)
    {

        $idProduits = $categorie->getId();

        $manager->remove($categorie);
        $manager->flush();

        $this->addFlash("Succès", "La voiture N°" . $categorie->getId() . "a bien été supprimée");

        return $this->redirectToRoute('app_categorie');
    }


    // details 
    #[Route('/categorie_details/{id}', name: 'categorie_details')]
    public function categorie_details(Categorie $categorie)
    {
        return $this->render('categorie/categorie_details.html.twig', [
            'controller_name' => 'CategorieDetailsController',
            'categorie' => $categorie

        ]);
    }


    #[Route('/categorie/{id}', name: 'categorie_produits')]
    public function details_produits($id, ProduitsRepository $repoProduits, CategorieRepository $repoCategorie, EntityManagerInterface $manager)
    {
        $filtre = $repoCategorie->find($id);
        $produits = $repoProduits->findAll(); 
        $categorie = $repoCategorie->findAll();

        return $this->render("categorie/filtre.html.twig",[
            'produits' => $produits,
            'categorie' => $categorie, 
        ]);
    }
}




      