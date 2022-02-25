<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsrAboutController extends AbstractController
{
    /**
     * @Route("/usr-about", name="usr_about")
     */
    public function index(): Response
    {
        return $this->render('usr_about/index.html.twig', [
            'controller_name' => 'UsrAboutController',
        ]);
    }
}
