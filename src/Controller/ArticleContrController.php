<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleContrController extends AbstractController
{
    /**
     * @Route("/article/contr", name="app_article_contr")
     */
    public function index(): Response
    {
        return $this->render('article_contr/index.html.twig', [
            'controller_name' => 'ArticleContrController',
        ]);
    }
    /**
     * @Route("/backoffice", name="backoffice")
     */
    public function backoffice(): Response
    {
        return $this->render('article_contr/backoffice.html.twig', [
            'controller_name' => 'ArticleContrController',
        ]);
    }
    /**
     * @Route("/article_contr", name="article_cont")
     */
    public function indexAdmin(): Response
    {
        return $this->render('article_contr/act.html.twig', [
            'controller_name' => 'ArticleContrController',
        ]);
    }
}
