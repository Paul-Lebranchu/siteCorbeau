<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GlobalController extends AbstractController
{
	/**
	* @Route
	*(
	* "/",
	* name = "accueil"
	*)
	*/
	public function pageAccueil(): Response
	{
		return $this->render("accueil.html.twig");
	}
}
?>
