<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewRecipeController extends AbstractController
{
    /**
     * @Route("/recipe/new", name="recipe_new")
     */
    public function index(): Response
    {
        return $this->render('new_recipe/index.html.twig', [
            'controller_name' => 'NewRecipeController',
        ]);
    }
}
