<?php

namespace App\Controller;

use App\Entity\Visiterdem;
use App\Form\VisiterdemType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/visiterdem")
 */
class VisiterdemController extends AbstractController
{
    /**
     * @Route("/", name="visiterdem_index", methods={"GET"})
     */
    public function index(): Response
    {
        $visiterdems = $this->getDoctrine()
            ->getRepository(Visiterdem::class)
            ->findAll();

        return $this->render('visiterdem/index.html.twig', [
            'visiterdems' => $visiterdems,
        ]);
    }

    /**
     * @Route("/new", name="visiterdem_new", methods={"GET","POST"})
     */
    public function createnew(Request $request): Response
    {
        $visiterdem = new Visiterdem();
        $form = $this->createForm(VisiterdemType::class, $visiterdem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($visiterdem);
            $entityManager->flush();

            return $this->redirectToRoute('visiterdem_index');
        }

        return $this->render('visiterdem/new.html.twig', [
            'visiterdem' => $visiterdem,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numvisite}", name="visiterdem_show", methods={"GET"})
     */
    public function show(Visiterdem $visiterdem): Response
    {
        return $this->render('visiterdem/show.html.twig', [
            'visiterdem' => $visiterdem,
        ]);
    }

    /**
     * @Route("/{numvisite}/edit", name="visiterdem_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Visiterdem $visiterdem): Response
    {
        $form = $this->createForm(VisiterdemType::class, $visiterdem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visiterdem_index');
        }

        return $this->render('visiterdem/edit.html.twig', [
            'visiterdem' => $visiterdem,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numvisite}", name="visiterdem_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Visiterdem $visiterdem): Response
    {
        if ($this->isCsrfTokenValid('delete'.$visiterdem->getNumvisite(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($visiterdem);
            $entityManager->flush();
        }

        return $this->redirectToRoute('visiterdem_index');
    }
}
