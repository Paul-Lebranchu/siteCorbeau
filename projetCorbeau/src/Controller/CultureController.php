<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CultureController extends AbstractController
{
	/**
	* @Route
	*(
	* "/culture/africaine",
	* name = "culture_africaine"
	*)
	*/
	public function afrique(): Response
	{
		return $this->render("culture/afrique.html.twig");
	}

	/**
	* @Route
	*(
	* "/culture/americaine",
	* name = "culture_americaine"
	*)
	*/
	public function amerique(): Response
	{
		return $this->render("culture/amerique.html.twig");
	}

	/**
	* @Route
	*(
	* "/culture/asiatique",
	* name = "culture_asiatique"
	*)
	*/
	public function asiatique(): Response
	{
		return $this->render("culture/asie.html.twig");
	}

	/**
	* @Route
	*(
	* "/culture/francaise",
	* name = "culture_francaise"
	*)
	*/
	public function francaise(): Response
	{
		return $this->render("culture/france.html.twig");
	}

	/**
	* @Route
	*(
	* "/culture/scandinave",
	* name = "culture_scandinave"
	*)
	*/
	public function scandinave(): Response
	{
		return $this->render("culture/scandinave.html.twig");
	}

}
?>
