<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            
        ]);
    }

    #[Route('/post/new')]
    public function create(Request $request): Response
    {
        $post = new Post();
        $form =$this->createForm(PostType::class, $post);

        $form->handlerequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($post);
        }
        return $this->render('post/form.html.twig', [
            'post_form' => $form->createView()
        ]);
    }

}
