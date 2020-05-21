<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/demande")
 */
class DemandeController extends AbstractController
{
    /**
     * @Route("/", name="demande_index", methods={"GET"})
     */
    public function index(): Response
    {
        $demandes = $this->getDoctrine()
            ->getRepository(Demande::class)
            ->findAll();

        return $this->render('demande/index.html.twig', [
            'demandes' => $demandes,
        ]);
    }

    /**
     * @Route("/new", name="demande_new", methods={"GET","POST"})
     */
    public function createnew(Request $request): Response
    {
        $userId = $this->getUser()->getId();
        $clientExiste = $this->getDoctrine()->getRepository(Client::class)->findOneById($userId);
        $client = $clientExiste;
        
        if (!$clientExiste){
            $newClient = new Client();
            $this->getUser()->setRoles(['ROLE_CLIENT']);
            $newClient->setId($this->getUser());
            $client = $newClient;
        }
        
        $demande = new Demande();
        $demande->setId($client);
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $arrondissements = $demande->getArrondisseDem();
            foreach ($arrondissements as $arrondisse) {
                $demande->addArrondisseDem($arrondisse);
                $arrondisse->addNumDem($demande);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('client_recherche', array('numDem' => $demande->getNumDem() ));
        }

        return $this->render('demande/new.html.twig', [
            'client' => $client,
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numDem}", name="demande_show", methods={"GET"})
     */
    public function show(Demande $demande): Response
    {
        return $this->render('demande/show.html.twig', [
            'demande' => $demande,
        ]);
    }

    /**
     * @Route("/{numDem}/edit", name="demande_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Demande $demande): Response
    {
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $arrondissements = $demande->getArrondisseDem();
            foreach ($arrondissements as $arrondisse) { //mieux mais pas parfait
                $demande->addArrondisseDem($arrondisse);
                $arrondisse->addNumDem($demande);
            }
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('client_recherche', array('numDem' => $demande->getNumDem() ));
        }
        return $this->render('demande/edit.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numDem}", name="demande_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Demande $demande): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demande->getNumDem(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('demande_new');
    }
    
    /**
     * @Route("/{numDem}/recherche", name="client_recherche", methods={"GET","POST"})
     */
    public function rechercheDemande(Request $request, Demande $demande): Response
    {
       
        //$prixmax = $request->get('p');
        
        $type = $demande->getTypeDem();
        $ville = $demande->getVilleDem();
        $datelimite = $demande->getDateLimite();
        $arrondissements = $demande->getArrondisseDem();
        
        $appartements = array();
        
        $em = $this->getDoctrine()->getManager();
        
        foreach ($arrondissements as $arrondissement){
            $query = $em->createQuery('SELECT a FROM App\Entity\Appartement a WHERE a.typeappart LIKE :type and a.ville LIKE :ville and '
                . 'a.arrondisseDem = :arrondisseDem and a.dateLibre <= :datelimite and a.numappart NOT IN('
                . 'SELECT l FROM App\Entity\Locataire l) order by a.prixLoc'); //appts sans locataire
                //. 'and  and a.prixLoc <= :prixmax');
            $query->setParameters(array('arrondisseDem'=> $arrondissement, 'datelimite' => $datelimite, 
                'ville' => '%'.$ville.'%', 'type'=> '%'.$type.'%'));
                //, 'prixmax' => $prixmax));
            $resappartements = $query->getResult();
            $appartements[] = $resappartements;
        }
        
        return new Response($this->render('demande/client_recherche.html.twig', 
                array('resappartements'=> $appartements,
                      'demande' => $demande)
                ));
    }
}
