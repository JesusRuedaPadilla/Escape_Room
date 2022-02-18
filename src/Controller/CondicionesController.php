<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CondicionesController extends AbstractController
{
    /**
     * @Route("/condiciones", name="condiciones")
     */
    public function index(): Response
    {
        return $this->render('condiciones/index.html.twig', [
            'controller_name' => 'CondicionesController',
        ]);
    }
}
