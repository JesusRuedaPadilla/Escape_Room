<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsrCondicionesController extends AbstractController
{
    /**
     * @Route("/usr-condiciones", name="usr_condiciones")
     */
    public function index(): Response
    {
        return $this->render('usr_condiciones/index.html.twig', [
            'controller_name' => 'UsrCondicionesController',
        ]);
    }
}
