<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AvisClientRepository;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

//    #[Route('/homepage', name: 'connection_verify')]
//    public function connection_verify(Security $security): Response
//    {
//        // Vérifier si l'utilisateur est connecté
//        $user = $security->getUser();
//
//        // Passer l'utilisateur connecté au template
//        return $this->render('homepage/index.html.twig', [
//            'user' => $user,
//        ]);
//    }

//    #[Route('/homepage', name: 'avislist')]
//    public function avisList(AvisClientRepository $avisClientRepository): Response
//    {
//        // Utilisez le repository pour récupérer les avis clients
//        $avisClients = $avisClientRepository->findAll();
//
//        //renvoyer sur la vue twig de la page d'accueil
//        return $this->render('homepage/index.html.twig', [
//            'avisClients' => $avisClients,
//        ]);
//    }

}
