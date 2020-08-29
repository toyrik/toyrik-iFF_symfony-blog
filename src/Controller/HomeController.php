<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public $pageTitle = 'Домашняя страница';
    
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $articleRepository->findAll(),
            'pageTitle' => $this->pageTitle
        ]);
    }
}
