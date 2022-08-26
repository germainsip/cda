<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OneController extends AbstractController
{
    #[Route('/', name: 'app_one')]
    public function index(): Response
    {
        return $this->render('one/index.html.twig', [
            'controller_name' => 'Biloute',
        ]);
    }

    #[Route('/bidule', name:'bidule')]
    public function bidule(): Response
    {
        return $this->render('one/bidule.html.twig',[]);
    }
}
