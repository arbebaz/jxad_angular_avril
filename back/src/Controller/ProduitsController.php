<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProduitsType;
use App\Repository\ProduitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitsController extends MyController
{
    #[Route('/produits', name: 'app_produits')]
    public function index(ProduitsRepository $repoProduits, Request $request, EntityManagerInterface $manager): Response
    {
        $produits = $repoProduits->findAll();

        $produit = new Produits();

        $form = $this->createForm(ProduitsType::class, $produit);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** 
             * @var UploadedFile
             * **/

            $uploaded = $form->get('fichier')->getData();
            // dd($uploaded); 
            

            $nom = uniqid() . '.' . $uploaded->guessExtension();
                $dossier = __DIR__ . '/../../public/'.$produit->getIdCategorie()->getDossier();

                // $dossier = __DIR__ . '/../../public/images/';
                // $dossier = __DIR__ . '/../../public/pdf/';
        

            $uploaded->move($dossier, $nom);

            $produit->setFichier($nom);
            

            $manager->persist($produit);

            $manager->flush();

            $this->addFlash('Success', "Le produit " . $produit->getId() . " à bien été ajouté ! 😎");

            return $this->redirectToRoute("app_produits");
        }
        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitsController',
            'produits' => $produits,

            'FormProduits' => $form->createView(),
        ]);
    }

    // Update 
    #[Route('/produits_update/{id}', name: 'produits_update')]

    public function produits_update(Produits $produits, Request $request, EntityManagerInterface $manager)
    {

        $form = $this->createForm(ProduitsType::class, $produits);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($produits);
            $manager->flush();

            $this->addFlash("Succès", "Le produit N°" . $produits->getId() . "a bien été modifée");

            return $this->redirectToRoute('app_produits');
        }

        return $this->render("produits/produits_update.html.twig", [
            'controller_name' => 'ProduitsUpdateController',
            "formProduits" => $form->createView(),
            "produits" => $produits
        ]);
    }


    // Delete 
    #[Route('/produits_delete/{id}', name: 'produits_delete')]

    public function produits_delete(Produits $produits, EntityManagerInterface $manager)
    {

        $idProduits = $produits->getId();

        $manager->remove($produits);
        $manager->flush();

        $this->addFlash("Succès", "La voiture N°" . $produits->getId() . "a bien été supprimée");

        return $this->redirectToRoute('app_produits');
    }


    // details 
    #[Route('/produits_details/{id}', name: 'produits_details')]
    public function produits_details(Produits $produits)
    {
        return $this->render('produits/produits_details.html.twig', [
            'controller_name' => 'ProduitsDetailsController',
            'produits' => $produits

        ]);
    }
}
