<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CorbeauController extends AbstractController
{
	/**
	* @Route
	*(
	* "/corbeau/brun",
	* name = "corbeau_brun"
	*)
	*/
	public function corbeauBrun(): Response
	{
		return $this->render("corbeau/brun.html.twig");
	}

	/**
	* @Route
	*(
	* "/corbeau/desert",
	* name = "corbeau_du_desert"
	*)
	*/
	public function corbeauDesert(): Response
	{
		return $this->render("corbeau/desert.html.twig");
	}

	/**
	* @Route
	*(
	* "/corbeau/freux",
	* name = "corbeau_freu"
	*)
	*/
	public function corbeauFreux(): Response
	{
		return $this->render("corbeau/freux.html.twig");
	}

	/**
	* @Route
	*(
	* "/corbeau/pie",
	* name = "corbeau_pie"
	*)
	*/
	public function corbeauPie(): Response
	{
		return $this->render("corbeau/pie.html.twig");
	}

	/**
	* @Route
	*(
	* "/corbeau/grand",
	* name = "grand_corbeau"
	*)
	*/
	public function grandCorbeau(): Response
	{
		return $this->render("corbeau/grand.html.twig");
	}

	/**
	* @Route
	*(
	* "/corbeau/petit",
	* name = "petit_corbeau"
	*)
	*/
	public function petitCorbeau(): Response
	{
		return $this->render("corbeau/petit.html.twig");
	}
}
?>
