<?php

namespace App\Controller;

use App\Entity\Proprietaire;
use App\Form\ProprietaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use App\Security\LoginFormAuthentificatorAuthenticator;

/**
 * @Route("/proprietaire")
 */
class ProprietaireController extends AbstractController
{
    /**
     * @Route("/", name="proprietaire_list", methods={"GET"})
     */
    public function index(): Response
    {
        $proprietaires = $this->getDoctrine()
            ->getRepository(Proprietaire::class)
            ->findAll();

        return $this->render('proprietaire/index.html.twig', [
            'proprietaires' => $proprietaires,
        ]);
    }

    /**
     * @Route("/new", name="proprietaire_new", methods={"GET","POST"})
     */
    public function createnew(Request $request): Response
    {
        $proprietaire = new Proprietaire();
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($proprietaire);
            $entityManager->flush();

            return $this->redirectToRoute('proprietaire_index');
        }

        return $this->render('proprietaire/new.html.twig', [
            'proprietaire' => $proprietaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="proprietaire_show", methods={"GET"})
     */
    public function show(Proprietaire $proprietaire): Response
    {
        return $this->render('proprietaire/show.html.twig', [
            'proprietaire' => $proprietaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="proprietaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Proprietaire $proprietaire): Response
    {
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proprietaire_index');
        }

        return $this->render('proprietaire/edit.html.twig', [
            'proprietaire' => $proprietaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="proprietaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Proprietaire $proprietaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proprietaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($proprietaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('proprietaire_index');
    }
    
    /**
     * @Route("/{id}/liste-appartements", name="liste_appartements", methods={"GET"})
     */
    public function mesAppartements(): Response
    {
        $em = $this->getDoctrine()->getManager();
        
        $proprietaire = $this->getUser();
        
        $query = $em->createQuery('SELECT a FROM App\Entity\Appartement a WHERE a.proprietaire= :proprietaire');
        $query->setParameter('proprietaire', $proprietaire);
        $appartements = $query->getResult();
        
        return $this->render('proprietaire/liste_appartements.html.twig', [
            'appartements' => $appartements
        ]);
    }
    
    /**
     * @Route("/{id}/liste-demandes", name="visites_demande", methods={"GET"})
     */
    public function mesDemandesVisite(): Response
    {
        $em = $this->getDoctrine()->getManager();
        
        $proprietaire = $this->getUser();
        // v.numappart = a.numappart and a.proprietaire=proprietaire.id
        $query = $em->createQuery('SELECT v FROM App\Entity\Visiterdem v JOIN App\Entity\Appartement a '
                . 'where a.proprietaire= :proprietaire');
        $query->setParameter('proprietaire', $proprietaire);
        $visites = $query->getResult();
        
        return $this->render('proprietaire/liste_visites.html.twig', [
            'visites' => $visites
        ]);
    }
}
