<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends MyController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(UserRepository $repoUser, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = $repoUser->findAll(); 

        $users = new User(); 

        $form = $this->createForm(ProfilType::class, $users); 

        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) {

            $users->setPassword(
                $userPasswordHasher->hashPassword(
                    $users,
                    htmlspecialchars(
                        $form->get('plainPassword')->getData()
                    )
                )
                    );

            $manager->persist($users);

            $manager->flush();

            $this->addFlash("Succès", "L'utilisateur N°" . $users->getId() . " a bien été ajouté ! 🥷🏽");

        }

        return $this->render('profil/index.html.twig', [
            'controller_name' => 'Mon profil',
            'user' => $user, 
            'formProfil' => $form->createView()
        ]);
    }





    // Update 
    #[Route('/profil_update/{id}', name: 'profil_update')]

    public function profil(User $user, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $userPasswordHasher)
    {
        
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    htmlspecialchars(
                        $form->get('plainPassword')->getData()
                    )
                )
            );
    
            $manager->persist($user);
            $manager->flush();

            
            $this->addFlash("Succès", "L'utilisateur N°" . $user->getId() . " a bien été modifié ! 🥷🏽");

            return $this->redirectToRoute('app_profil');
        }

        return $this->render("profil/profil_update.html.twig", [
            'controller_name' => ', modifier mon profil',
            "formProfil" => $form->createView(),
            "user" => $user
        ]);
    }

}
 