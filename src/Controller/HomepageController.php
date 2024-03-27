<?php

namespace App\Controller;

use App\Entity\AvisClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    public function connection_verify(Security $security): Response
    {
        // Vérifier si l'utilisateur est connecté
        $user = $security->getUser();

        // Passer l'utilisateur connecté au template
        return $this->render('homepage/index.html.twig', [
            'user' => $user,
        ]);
    }

    public function avis(): Response
    {
        $avisClientRepository = $this->getDoctrine()->getRepository(AvisClient::class);
        $avis_clients = $avisClientRepository->findAll();

        return $this->render('homepage/index.html.twig', [
            'avis_clients' => $avis_clients,
        ]);
    }

}
