<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LikeContrController extends AbstractController
{
    /**
     * @Route("/like/contr", name="app_like_contr")
     */
    public function index(): Response
    {
        return $this->render('like_contr/index.html.twig', [
            'controller_name' => 'LikeContrController',
        ]);

    }
}
