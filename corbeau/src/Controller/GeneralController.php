<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GeneralController extends AbstractController
{
	/**
     * @Route("/", name ="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('accueil.html.twig');
    }

	/**
     * @Route("/connexion", name ="connexion")
     */
	public function connexion(): Response
	{
	    return $this->render('formulaire/connexion.html.twig');
	}

	 /**
     * @Route("/inscription", name ="inscription")
     */
	public function inscription(): Response
	{
	    return $this->render('formulaire/inscription.html.twig');
	}

}

?>
