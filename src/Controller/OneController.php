<?php

namespace App\Controller;

use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OneController extends AbstractController
{
    // #[Route('/', name: 'app_one')]
    // public function index(): Response
    // {
    //     return $this->render('one/index.html.twig', [
    //         'controller_name' => 'Biloute',
    //     ]);
    // }

    #[Route('/', name:'les_notes')]
    public function bidule( NoteRepository $noteRepository): Response
    {
        $listeDeNotes = $noteRepository->findAll();

        return $this->render('one/bidule.html.twig',[
            'listenotes'=>$listeDeNotes
        ]);
    }
}
