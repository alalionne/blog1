<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    
    /**
     * @Route("/blog/new", name="blog_new")
     */
    public function new(){
        return $this->render('blog/new.html.twig');
    }
    /**
     * @Route("/blog/12", name="blog_show")
     */
    public function show(){
        return $this->render('blog/show.html.twig');
    }
}
