<?php

namespace App\Controller;

use App\Entity\Arrondissement;
use App\Form\ArrondissementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/arrondissement")
 */
class ArrondissementController extends AbstractController
{
    /**
     * @Route("/", name="arrondissement_index", methods={"GET"})
     */
    public function index(): Response
    {
        $arrondissements = $this->getDoctrine()
            ->getRepository(Arrondissement::class)
            ->findAll();

        return $this->render('arrondissement/index.html.twig', [
            'arrondissements' => $arrondissements,
        ]);
    }

    /**
     * @Route("/new", name="arrondissement_new", methods={"GET","POST"})
     */
    public function createnew(Request $request): Response
    {
        $arrondissement = new Arrondissement();
        $form = $this->createForm(ArrondissementType::class, $arrondissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($arrondissement);
            $entityManager->flush();

            return $this->redirectToRoute('arrondissement_index');
        }

        return $this->render('arrondissement/new.html.twig', [
            'arrondissement' => $arrondissement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{arrondisseDem}", name="arrondissement_show", methods={"GET"})
     */
    public function show(Arrondissement $arrondissement): Response
    {
        return $this->render('arrondissement/show.html.twig', [
            'arrondissement' => $arrondissement,
        ]);
    }

    /**
     * @Route("/{arrondisseDem}/edit", name="arrondissement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Arrondissement $arrondissement): Response
    {
        $form = $this->createForm(ArrondissementType::class, $arrondissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('arrondissement_index');
        }

        return $this->render('arrondissement/edit.html.twig', [
            'arrondissement' => $arrondissement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{arrondisseDem}", name="arrondissement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Arrondissement $arrondissement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$arrondissement->getArrondisseDem(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($arrondissement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('arrondissement_index');
    }
}
