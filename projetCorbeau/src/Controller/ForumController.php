<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ForumController extends AbstractController
{
	/**
	* @Route
	*(
	* "/forum",
	* name = "accueil_forum"
	*)
	*/
	public function forumAccueil(): Response
	{
		return $this->render("forum/accueil.html.twig");
	}

}
?>
