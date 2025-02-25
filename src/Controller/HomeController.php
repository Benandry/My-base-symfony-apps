<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController{
    #[Route('/', name: 'app_home')]
    public function index( EntityManagerInterface $entityManager,UserPasswordHasherInterface  $hasher): Response
    {
            $this->denyAccessUnlessGranted('ROLE_USER'); 
            // $user = (new  User())
            // ->setEmail('nandry556@gmail.com')
            // ->setUsername('Eloi Charly')
            // ->setRoles(['ROLE_USER']); 
            // $user =  $user->setPassword($hasher->hashPassword($user, '1111'));
            // $entityManager->persist($user);
            // $entityManager->flush();

        return $this->render('home/index.html.twig', 
        ['message' => 'Welcome to your new controller!']
    );
    }
}
