<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseUsuarioIdentController extends AbstractController
{
    /**
     * @Route("/usr-index", name="base_usuario_ident")
     */
    public function index(): Response
    {
        return $this->render('base_usuario_ident/indexUSR.html.twig', [
            'controller_name' => 'BaseUsuarioIdentController',
        ]);
    }
}
