<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndividualLogueadoController extends AbstractController
{
    /**
     * @Route("/usr-individual", name="individual_logueado")
     */
    public function index(): Response
    {
        return $this->render('individual_logueado/index.html.twig', [
            'controller_name' => 'IndividualLogueadoController',
        ]);
    }
}
