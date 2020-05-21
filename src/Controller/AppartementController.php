<?php

namespace App\Controller;

use App\Entity\Appartement;
use App\Form\AppartementType;
use App\Entity\Visiterdem;
use App\Form\VisiterdemType;
use App\Entity\Utilisateur;
use App\Entity\Proprietaire;
use App\Entity\Client;
use App\Entity\Locataire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appartement")
 */
class AppartementController extends AbstractController
{
    /**
     * @Route("/", name="appartement_index", methods={"GET"})
     */
    public function index(): Response
    {
        $appartements = $this->getDoctrine()
            ->getRepository(Appartement::class)
            ->findAll();

        return $this->render('appartement/index.html.twig', [
            'appartements' => $appartements,
        ]);
    }

    /**
     * @Route("/new", name="appartement_new", methods={"GET","POST"})
     */
    public function create(Request $request): Response
    {
        $userId = $this->getUser()->getId();
        $proprietaireExiste = $this->getDoctrine()->getRepository(Proprietaire::class)->findOneById($userId);
        $proprietaire = $proprietaireExiste;
        
        if (!$proprietaireExiste){
            $newProprietaire = new Proprietaire();
            $this->getUser()->setRoles(['ROLE_PROPRIETAIRE']);
            $newProprietaire->setId($this->getUser());
            $proprietaire = $newProprietaire;
        }
        
        $appartement = new Appartement();
        $appartement->setProprietaire($proprietaire);
        
        $form = $this->createForm(AppartementType::class, $appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */  
            $file = $form->get('photo')->getData();
            //$file = $appartement->getPhoto();
            $ext = $file->guessExtension();
            
            $newFilename = md5(uniqid()) . '.' . $ext ;
            
            $photos = $this->getParameter('photos_directory');
            
            $file->move($photos, $newFilename);
            $appartement->setPhoto($newFilename);  
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($appartement);
            $entityManager->flush();
            
            return $this->redirectToRoute('appartement_show', array('numappart' => $appartement->getNumappart())); 

        } 
            
            /** @var UploadedFile $photoFile */
        /*    $photoFile = $form->get('photo')->getData();

            // this condition is needed because the 'photo' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

                // Move the file to the directory where photos are stored
                try {
                    $photoFile->move(
                        $this->getParameter('photos_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'photoFilename' property to store the PDF file name
                // instead of its contents
                $appartement->setPhoto($newFilename);
            }*/

        return $this->render('appartement/new.html.twig', [
            'appartement' => $appartement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numappart}", name="appartement_show", methods={"GET"})
     */
    public function show(request $request, Appartement $appartement)
    {
        $em = $this->getDoctrine()->getManager();
        
        $idProprietaire = $appartement->getProprietaire()->getId();
        $numAppartement = $appartement->getNumappart();
        
        //trouver les infos du propriétaire
        $pquery = $em->createQuery('SELECT u FROM App\Entity\Utilisateur u WHERE u.id= :idproprietaire');
        $pquery->setParameter('idproprietaire', $idProprietaire);
        $proprietaire = $pquery->getResult();
        
        $locataire = $this->getDoctrine()->getRepository(Locataire::class)->findOneByNumappart($numAppartement);
         
        return $this->render('appartement/show.html.twig', [
            'appartement' => $appartement,
            'proprietaire' => $proprietaire,
            'locataire' => $locataire
        ]);
    }

    /**
     * @Route("/{numappart}/edit", name="appartement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Appartement $appartement): Response
    {
        $form = $this->createForm(AppartementType::class, $appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */  
            $file = $form->get('photo')->getData();
            //$file = $appartement->getPhoto();
            $ext = $file->guessExtension();
            
            $newFilename = md5(uniqid()) . '.' . $ext ;
            
            $photos = $this->getParameter('photos_directory');
            
            $file->move($photos, $newFilename);
            $appartement->setPhoto($newFilename);    
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($appartement);
            $entityManager->flush();
            

            return $this->redirectToRoute('appartement_show', array('numappart' => $appartement->getNumappart()));
        }

        return $this->render('appartement/edit.html.twig', [
            'appartement' => $appartement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{numappart}", name="appartement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Appartement $appartement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appartement->getNumappart(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($appartement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appartement_index');
    }
    
    /**
     * @Route("/{numappart}/visite/new", name="visiter_new", methods={"GET","POST"})
     */
    public function createVisitedem(Request $request, Appartement $appartement): Response
    {
        //partie client
        $idAppart = $appartement->getNumappart();
        
        $userId = $this->getUser()->getId();
        $client = $this->getDoctrine()->getRepository(Client::class)->findOneById($userId);
        
        $visiter = new Visiterdem();
        $visiter->setId($client);
        $visiter->setNumappart($appartement);
        //$visiter->setId($utilisateur);
        $form = $this->createForm(VisiterdemType::class, $visiter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($visiter);
            $entityManager->flush();
            return $this->redirectToRoute('app_login');
        }
        return $this->render('visiterdem/new.html.twig', [
            'visiter' => $visiter,
            'form' => $form->createView()
            ]);
    }
    
    /**
     * @Route("/{numappart}/demandes", name="liste_demandes", methods={"GET"})
     */
    public function listeVisite(Appartement $appartement): Response
    {
        $numappart = $appartement->getNumappart();
        
        $em = $this->getDoctrine()->getManager();
        
        $proprietaire = $this->getUser();
        // v.numappart = a.numappart and a.proprietaire=proprietaire.id
        $query = $em->createQuery('SELECT v FROM App\Entity\Visiterdem v JOIN App\Entity\Appartement a '
                . 'WHERE v.numappart= :numappart and a.proprietaire= :proprietaire');
        $query->setParameters(array('numappart' => $numappart, 'proprietaire' => $proprietaire->getId()));
        //$query->setParameters('numappart', $numappart);
        $visites = $query->getResult();
        
        return $this->render('appartement/demandes.html.twig', [
            'visites' => $visites
        ]);
    }
}