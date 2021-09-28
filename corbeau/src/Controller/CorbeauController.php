<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CorbeauController extends AbstractController
{
	/**
     * @Route("/corbeau/aCollier", name ="collier")
     */
    public function collier(): Response
    {
        return $this->render('espece/corbeauACollier.html.twig');
    }

	/**
     * @Route("/corbeau/aCouBlanc", name ="couBlanc")
     */
    public function couBlanc(): Response
    {
        return $this->render('espece/corbeauACouBlanc.html.twig');
    }

	/**
     * @Route("/corbeau/aGrosBec", name ="grosBec")
     */
    public function grosBec(): Response
    {
        return $this->render('espece/corbeauAGrosBec.html.twig');
    }

	/**
     * @Route("/corbeau/aNuqueBlanche", name ="nuqueBlanche")
     */
    public function nuqueBlanche(): Response
    {
        return $this->render('espece/corbeauANuqueBlanche.html.twig');
    }

	/**
     * @Route("/corbeau/aQueueCourte", name ="queueCourte")
     */
    public function queueCourte(): Response
    {
        return $this->render('espece/corbeauAQueueCourte.html.twig');
    }

	/**
     * @Route("/corbeau/brun", name ="brun")
     */
    public function brun(): Response
    {
        return $this->render('espece/corbeauBrun.html.twig');
    }

	/**
     * @Route("/corbeau/caledonien", name ="caledonien")
     */
    public function caledonien(): Response
    {
        return $this->render('espece/corbeauCaledonien.html.twig');
    }

	/**
     * @Route("/corbeau/corbivau", name ="corbivau")
     */
    public function corbivau(): Response
    {
        return $this->render('espece/corbeauCorbivau.html.twig');
    }

	/**
     * @Route("/corbeau/australie", name ="australie")
     */
    public function australie(): Response
    {
        return $this->render('espece/corbeauDAustralie.html.twig');
    }

	/**
     * @Route("/corbeau/edith", name ="edith")
     */
    public function edith(): Response
    {
        return $this->render('espece/corbeauDEdith.html.twig');
    }

	/**
     * @Route("/corbeau/levaillant", name ="levaillant")
     */
    public function levaillant(): Response
    {
        return $this->render('espece/corbeauDeLevaillant.html.twig');
    }

	/**
     * @Route("/corbeau/bismark", name ="bismark")
     */
    public function bismark(): Response
    {
        return $this->render('espece/corbeauDesBismarck.html.twig');
    }

	/**
     * @Route("/corbeau/tasmanie", name ="tasmanie")
     */
    public function tasmanie(): Response
    {
        return $this->render('espece/corbeauDeTasmanie.html.twig');
    }

	/**
     * @Route("/corbeau/torres", name ="torres")
     */
    public function torres(): Response
    {
        return $this->render('espece/corbeauDeTorres.html.twig');
    }

	/**
     * @Route("/corbeau/desert", name ="desert")
     */
    public function desert(): Response
    {
        return $this->render('espece/corbeauDuDesert.html.twig');
    }

	/**
     * @Route("/corbeau/familier", name ="familier")
     */
    public function familier(): Response
    {
        return $this->render('espece/corbeauFamilier.html.twig');
    }

	/**
     * @Route("/corbeau/freux", name ="freux")
     */
    public function freux(): Response
    {
        return $this->render('espece/corbeauFreux.html.twig');
    }

	/**
     * @Route("/corbeau/corbeauPie", name ="corbeauPie")
     */
    public function pie(): Response
    {
        return $this->render('espece/corbeauPie.html.twig');
    }

	/**
     * @Route("/corbeau/grandCorbeau", name ="grand")
     */
    public function grand(): Response
    {
        return $this->render('espece/grandCorbeau.html.twig');
    }

	/**
     * @Route("/corbeau/petitCorbeau", name ="petit")
     */
    public function petit(): Response
    {
        return $this->render('espece/petitCorbeau.html.twig');
    }
}

?>
