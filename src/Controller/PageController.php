<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Clase que controla la vista principal
 */
class PageController extends AbstractController 
{
	#[Route('/', name: 'home')]
	public function index(): Response
	{
		//return new Response("This is the index page");

		return $this->render('pages/home.html.twig', [
			'title' => 'Home Page',
		]);
	}

}