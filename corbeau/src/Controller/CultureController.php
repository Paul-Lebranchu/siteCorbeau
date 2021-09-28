<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CultureController extends AbstractController
{
	/**
     * @Route("/culture/africaine", name ="africaine")
     */
	 public function africaine(): Response
    {
        return $this->render('culture/africaine.html.twig');
    }

	/**
     * @Route("/culture/americaine", name ="americaine")
     */
	 public function americaine(): Response
    {
        return $this->render('culture/americaine.html.twig');
    }

	/**
     * @Route("/culture/asiatique", name ="asiatique")
     */
	 public function asiatique(): Response
    {
        return $this->render('culture/asiatique.html.twig');
    }

	/**
     * @Route("/culture/celte", name ="celte")
     */
	 public function celte(): Response
    {
        return $this->render('culture/celte.html.twig');
    }

	/**
     * @Route("/culture/française", name ="française")
     */
	 public function française(): Response
    {
        return $this->render('culture/française.html.twig');
    }

	/**
     * @Route("/culture/grecque", name ="grecque")
     */
	 public function grec(): Response
    {
        return $this->render('culture/grec.html.twig');
    }

	/**
     * @Route("/culture/romaine", name="romaine")
     */
	 public function romaine(): Response
    {
        return $this->render('culture/romaine.html.twig');
    }

	/**
     * @Route("/culture/scandinave", name ="scandinave")
     */
    public function scandinave(): Response
    {
        return $this->render('culture/scandinave.html.twig');
    }

}

?>
