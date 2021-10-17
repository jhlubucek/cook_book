<?php

namespace App\Controller;

use App\Entity\RecipeTemplate;
use App\Form\RecipeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewRecipeController extends AbstractController
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @Route("/recipe/new", name="recipe_new")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
//        $typeParking = new RecipeFormType();
        $form = $this->createForm(RecipeFormType::class);
        $form->handleRequest($request);

        $this->getRecipeTemplateFromSession();

//        if ($form->isSubmitted() && $form->isValid()) {
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($typeParking);
//            $entityManager->flush();
//
//            return $this->redirectToRoute('type_parking_index');
//        }

//        return $this->render('type_parking/new.html.twig', [
//            'type_parking' => $typeParking,
//            'form' => $form->createView(),
//        ]);

        return $this->render('new_recipe/index.html.twig', [
//            'type_parking' => $typeParking,
            'form' => $form->createView()
        ]);
    }

    private function getRecipeTemplateFromSession($id = null){
        $session = $this->requestStack->getSession();
        $recipeTemplate = $session->get('recipeTemplate');

        if(!($recipeTemplate instanceof RecipeTemplate) || $recipeTemplate->getId() != $id){
            $recipeTemplate=new RecipeTemplate();
        }

        return $recipeTemplate;
    }
}
