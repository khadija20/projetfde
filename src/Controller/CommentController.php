<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comment;
use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use App\Service\CommentService;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;



class CommentController extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepo,
        private CommentRepository $commentRepo)
       
   {}
    #[Route('/ajax/comments', name: 'comment_add', methods: ['POST'])]
    public function  add(Request $request): Response
    {
        $commentData = $request->request->all('comment');
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }
}