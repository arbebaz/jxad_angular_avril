<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(EntityManagerInterface $em, Request $request): Response {

        $fichier = new Fichier;
        
        $form = $this->createForm(FichierType::class, $fichier);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile
             */
            $uploaded = $form->get('fichier')->getData();
            // dd($uploaded);

            $nom = hash('sha256', random_bytes(32)) . '.' . $uploaded->guessExtension();
            $dossier = __DIR__ . '/../../public/assets/fichiers/';

            $uploaded->move($dossier, $nom);

            $fichier->setFichier($nom);

            $em->persist($fichier);
            $em->flush();
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
            'fichier' => $fichier
        ]);
    }
    }

