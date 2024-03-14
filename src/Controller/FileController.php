<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FileController extends AbstractController
{
    #[Route('/file', name: 'app_file')]
    public function index(): Response
    {
        return $this->render('file/index.html.twig', [
            'controller_name' => 'FileController',
        ]);
    }

/**
     * @Route("/file/upload", name="file_upload")
     */
    public function uploadFile(): Response
    {
        // Traitement pour l'upload du fichier
    }

    /**
     * @Route("/file/delete/{id}", name="file_delete")
     */
    public function deleteFile($id): Response
    {
        // Traitement pour la suppression du fichier
    }

    /**
     * @Route("/file/download/{id}", name="file_download")
     */
    public function downloadFile($id): Response
    {
        // Traitement pour le téléchargement du fichier
    }

    
// Action pour afficher le formulaire d'upload
public function uploadForm(Request $request): Response
{
    $file = new File();
    $form = $this->createForm(FileType::class, $file);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Gérer l'upload du fichier
    }

    return $this->render('upload_form.html.twig', [
        'form' => $form->createView(),
    ]);
}

// Action pour afficher la liste des fichiers partagés
public function fileList(): Response
{
    $files = $this->getDoctrine()->getRepository(File::class)->findAll();

    return $this->render('file_list.html.twig', [
        'files' => $files,
    ]);
}

}
