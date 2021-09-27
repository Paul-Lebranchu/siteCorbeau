<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class CorbeauController extends AbstractController
{
	/**
     * @Route("/")
     */
    public function accueil(): Response
    {
        return $this->render('corbeau.html.twig');
    }

}

?>
