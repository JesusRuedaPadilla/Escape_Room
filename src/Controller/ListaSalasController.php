<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListaSalasController extends AbstractController
{
    /**
     * @Route("/lista-salas", name="lista_salas")
     */
    public function index(): Response
    {
        return $this->render('lista_salas/index.html.twig', [
            'controller_name' => 'ListaSalasController',
        ]);
    }
}
