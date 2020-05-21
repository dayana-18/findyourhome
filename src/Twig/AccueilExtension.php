<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Entity\Appartement;

class AccueilExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('filter_name', [$this, 'doSomething']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('appartbytype', [$this, 'getAppartementsType']),
            new TwigFunction('appartbyprix', [$this, 'getAppartementsPrix']),
            new TwigFunction('appartbyville', [$this, 'getAppartementsVille']),
        ];
    }

    public function getAppartementsType($type)
    {
        $em = $this->getDoctrine()->getManager();
        
        $tquery = $em->createQuery('SELECT a FROM App\Entity\Appartement a WHERE a.typeappart LIKE :type');
        $tquery->setParameter('type', '%'.$type.'%');
        $appartements = $tquery->getResult();
        return $appartements;
    }
    
    public function getAppartementsPrix($prixmin, $prixmax)
    {
        $em = $this->getDoctrine()->getManager();
        $pquery = $em->createQuery('SELECT a FROM App\Entity\Appartement a WHERE a.prixLoc BETWEEN :prixmin and :prixmax');
        $pquery->setParameter('prixmin', $prixmin, 'prixmax', $prixmax);
        $appartements = $pquery->getResult();
        return $appartements;
    }
    
    public function getAppartementsVille($ville)
    {
        $em = $this->getDoctrine()->getManager();
        $vquery = $em->createQuery('SELECT a FROM App\Entity\Appartement a WHERE a.ville LIKE :ville');
        $vquery->setParameter('ville', '%'.$ville.'%');
        $appartements = $vquery->getResult();
        return $appartements;
    }
}
