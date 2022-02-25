<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsrContactoController extends AbstractController
{
    /**
     * @Route("/usr-contacto", name="usr_contacto")
     */
    public function index(): Response
    {
        return $this->render('usr_contacto/index.html.twig', [
            'controller_name' => 'UsrContactoController',
        ]);
    }
}
