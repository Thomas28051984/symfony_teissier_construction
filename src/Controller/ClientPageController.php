<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientPageController extends AbstractController
{
    #[Route('/client/page', name: 'app_client_page')]
    public function index(): Response
    {
        return $this->render('client_page/index.html.twig', [
            'controller_name' => 'ClientPageController',
        ]);
    }
}
