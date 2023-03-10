<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepo,CategoryRepository $categoryRepo): Response
    {
        return $this->render('home/index.html.twig', [
            'articles' => $articleRepo->findAll(),
            'categories' => $categoryRepo->findAll()
        ]);
    }
}