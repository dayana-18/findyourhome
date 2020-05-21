<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Proprietaire;
use Symfony\Component\Routing\Annotation\Route;

class CotisationController extends AbstractController
{
    /**
     * @Route("/cotisation", name="cotisation")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        //trouver les propriétaires 
        $proprietaires = $this->getDoctrine()->getRepository(Proprietaire::class)->findAll();
        
        $appartements = array();
        
        foreach ($proprietaires as $proprietaire) {
            
            
            $idproprio = $proprietaire->getId();
            
            //Trouver les infos de leur(s) appartement(s)
            $aquery = $em->createQuery('SELECT a FROM App\Entity\Appartement a '
                    . 'WHERE a.proprietaire = :idproprio'); 
            $aquery->setParameter('idproprio', $idproprio);
            $lesappartements = $aquery->getResult();
            $appartements[] = $lesappartements;
        }
        
        return $this->render('cotisation/index.html.twig', [
            'appartements' => $appartements
        ]);
    }
}
