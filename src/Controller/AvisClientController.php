<?php

namespace App\Controller;

use App\Form\AvisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvisClientController extends AbstractController
{
    /**
     * @Route("/laisser-avis", name="laisser_avis")
     */
    public function laisserAvis(Request $request): Response
    {
        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avis);
            $entityManager->flush();

            // Redirigez l'utilisateur vers une autre page après la soumission réussie du formulaire
            return $this->redirectToRoute('homepage/index.html.twig');
        }

        return $this->render('avis_client/index.html.twig.', [
            'form' => $form->createView(),
        ]);
    }
}
