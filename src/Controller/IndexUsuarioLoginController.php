<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexUsuarioLoginController extends AbstractController
{
    /**
     * @Route("/usuario-index", name="index_usuario_login")
     */
    public function index(): Response
    {
        return $this->render('index_usuario_login/index.html.twig', [
            'controller_name' => 'IndexUsuarioLoginController',
        ]);
    }
}
