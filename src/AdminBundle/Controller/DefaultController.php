<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $repositoryActualite = $this->getDoctrine()->getRepository('AdminBundle:Actualite');
        $actualites = $repositoryActualite->findBy(
        array('zone' => NULL));
        if(count($actualites)>4){
        $actualites = array_slice($actualites, 0, 4);}
        $repositoryPartenaire = $this->getDoctrine()->getRepository('AdminBundle:Partenaire');
        $partenaires = $repositoryPartenaire->findALL();
  
        if(count($partenaires)>4){
        $partenaires = array_slice($actualites, 0, 4);}
        $repositoryConfidant= $this->getDoctrine()->getRepository('AdminBundle:Confidant');
        $confidants = $repositoryConfidant->findALL();
  
        if(count($confidants)>4){
        $confidants= array_slice($actualites, 0, 6);}
        return $this->render('AdminBundle:Template:index.html.twig', array("actualites"=>$actualites,'partenaires'=>$partenaires,"confidants"=>$confidants));
    }

}
