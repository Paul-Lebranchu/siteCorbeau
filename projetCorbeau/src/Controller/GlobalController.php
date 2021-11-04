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

	/**
	* @Route
	*(
	* "/inscription",
	* name = "inscription"
	*)
	*/
	public function inscription(): Response
	{
		return $this->render("formulaire/inscription.html.twig");
	}

	/**
	* @Route
	*(
	* "/connexion",
	* name = "connexion"
	*)
	*/
	public function connexion(): Response
	{
		return $this->render("formulaire/connexion.html.twig");
	}

	/**
	* @Route
	*(
	* "/similaire",
	* name = "similaire"
	*)
	*/
	public function similaire(): Response
	{
		return $this->render("similaire.html.twig");
	}

	/**
	* @Route
	*(
	* "/predateur",
	* name = "predateur"
	*)
	*/
	public function predateur(): Response
	{
		return $this->render("predateur.html.twig");
	}
}
?>
