<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Twig\Environment;

class CategoriesController extends AbstractController
{

	private $twig;

	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}


//	/**
//	 * @Route("/categories", name="categories.index")
//
//	 * @param EntityManager $em
//	 * @return string
//	 */
//	public function categoriesAction(EntityManager $em)
//	{
//		$categories = $em->getRepository(Category::class)->findAll();
//
//		return $this->twig->render('category/list.html.twig', ['categories' => $categories]);
//	}


}

