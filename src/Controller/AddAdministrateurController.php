<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddAdministrateurController extends AbstractController
{
    #[Route('/addadmin', name: 'app_add_administrateur')]
    public function index(): Response
    {
        return $this->render('add_administrateur/index.html.twig', [
            'controller_name' => 'AddAdministrateurController',
        ]);
    }
}
