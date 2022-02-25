<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsrSalasController extends AbstractController
{
    /**
     * @Route("/usr-salas", name="usr_salas")
     */
    public function index(): Response
    {
        return $this->render('usr_salas/index.html.twig', [
            'controller_name' => 'UsrSalasController',
        ]);
    }
}
