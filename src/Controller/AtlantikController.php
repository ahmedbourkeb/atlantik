<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AtlantikController extends AbstractController
{
    /**
     * @Route("/atlantik", name="atlantik")
     */
    public function index()
    {
        return $this->render('atlantik/index.html.twig', [
            'controller_name' => 'AtlantikController',
        ]);
    }
}
