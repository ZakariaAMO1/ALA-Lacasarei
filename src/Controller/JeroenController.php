<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JeroenController extends AbstractController
{
    /**
     * @Route("/jeroen", name="jeroen")
     */
    public function index()
    {
        return $this->render('jeroen/index.html.twig', [
            'controller_name' => 'JeroenController',
        ]);
    }
}
