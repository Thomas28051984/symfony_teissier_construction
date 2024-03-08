<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ClientAvisRepository;

class AvisClientsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ClientAvisRepository $ClientAvisRepository): Response
    {
        $avis = $ClientAvisRepository->findAll();
        $date_publication = '';

        return $this->render('/', [
            'avis' => $avis,
            'date_publication' => $date_publication,
            ]);
    }

}


