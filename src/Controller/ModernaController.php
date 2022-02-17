<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModernaController extends AbstractController
{
    /**
     * @Route("/moderna", name="moderna")
     */
    public function index(): Response
    {
        return $this->render('moderna/index.html.twig', [
            'controller_name' => 'ModernaController',
        ]);
    }
}
