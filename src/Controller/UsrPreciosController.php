<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsrPreciosController extends AbstractController
{
    /**
     * @Route("/usr-precios", name="usr_precios")
     */
    public function index(): Response
    {
        return $this->render('usr_precios/index.html.twig', [
            'controller_name' => 'UsrPreciosController',
        ]);
    }
}
