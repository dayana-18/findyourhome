<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Appartement;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $message = "Hey! Bienvenu(e) chez Find Your Home";
        
        $appartements = $this->getDoctrine()->getRepository(Appartement::class)->findAll();
        
        return $this->render('accueil/index.html.twig', [
            'message' => $message,
            'appartements' => $appartements
        ]);
         /*return new Response(
            '<html><body>Print msg: '.$hey.'</body></html>'
        );*/
    }
    
    public function liste(){
        
    }
    
    public function affichage() {
        
    }
    
    /**
     * @Route("/recherche", name="recherche")
     */
    /*public function recherche(Request $request)
    {
        $type = $request->get('t');
        $prixmax = $request->get('p');
        $ville = $request->get('v');
        
        $em = $this->getDoctrine()->getManager();
        
        $query = $em->createQuery('SELECT a FROM App\Entity\Appartement a WHERE a.typeappart LIKE :type and '
                . 'a.prixLoc <= :prixmax and a.ville LIKE :ville');
        $query->setParameters(array('type'=> '%'.$type.'%', 'prixmax' => $prixmax, 'ville' => '%'.$ville.'%'));
        $resappartements = $query->getResult();
        
        return new Response($this->render('accueil/recherche.html.twig', 
                array('resappartements'=> $resappartements,
                    'type' => $type, 
                    'prixmax' => $prixmax,
                    'ville' => $ville)));
    }*/
}
