<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends MyController
{
    #[Route('/user', name: 'app_user')]
    public function index(UserRepository $repoUser, Request $request, EntityManagerInterface $manager): Response
    {
        $user = $repoUser->findAll(); 

        $users = new User(); 

        $form = $this->createForm(UserType::class, $users); 

        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($users);

            $manager->flush();

            $this->addFlash('Success', "L'utilisateur N° " . $users->getId() . " a bien été ajouté ! 🦋");

        }

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user, 
            'FormUser' => $form->createView()
        ]);
    }


    // Update 
    #[Route('/user_update/{id}', name: 'user_update')]

    public function user_update(User $user, Request $request, EntityManagerInterface $manager)
    {

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();

            $this->addFlash('Success', "L'utilisateur N° " . $user->getId() . " a bien été modifié ! 🦋");

            return $this->redirectToRoute('app_user');
        }

        return $this->render("user/user_update.html.twig", [
            'controller_name' => 'UserUpdateController',
            "FormUser" => $form->createView(),
            "user" => $user
        ]);
    }


    // Delete 
    #[Route('/user_delete/{id}', name: 'user_delete')]

    public function user_delete(User $user, EntityManagerInterface $manager)
    {

        $idUser = $user->getId();

        $manager->remove($user);
        $manager->flush();

        $this->addFlash('Success', "L'utilisateur N° " . $user->getId() . " a bien été supprimé ! 🚨");

        return $this->redirectToRoute('app_user');
    }


    // details 
    #[Route('/user_details/{id}', name: 'user_details')]
    public function user_details(User $user)
    {
        return $this->render('user/user_details.html.twig', [
            'controller_name' => 'UserDetailsController',
            'user' => $user

        ]);
    }
}
