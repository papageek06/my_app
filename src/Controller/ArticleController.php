<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    #[Route('/article/{id}', name: 'show_article')]
    public function getArticleInfo(int $id , ArticleRepository $articleRepository): Response
    {
       $article = $articleRepository->find($id);

        return $this->render('article/index.html.twig', [
            'article' => $article,
        ]);
    }
}
