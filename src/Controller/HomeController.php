<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Twig\Environment;

class HomeController
{

	private $twig;

	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

	/**
	 * @Route("/", name="home")
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function __invoke(Request $request) : Response
	{
		return new Response(
			$this->twig->render('page/home.html.twig')
		);
	}
}

