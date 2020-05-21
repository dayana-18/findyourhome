<?php

namespace App\Form;

use App\Entity\Locataire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Utilisateur;
use App\Entity\Appartement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class LocataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           /*->add('id', EntityType::class, array(
                'class' => Utilisateur::class,
                'choice_label'  => 'id'))*/
            /*->add('id', EntityType::class, array(
                'class' => Utilisateur::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                            ->orderBy('u.nom', 'ASC');
                },
                'choice_label' => 'nom'))*/
            ->add('id', EntityType::class, array(
                'class' => Utilisateur::class,            
                'choice_label' => function ($utilisateur) {
                    return $utilisateur->getPrenom()." ".$utilisateur->getNom();
            }))
            ->add('RIB')
            ->add('telBanque')
            ->add('numappart', EntityType::class, array(
                'class' => Appartement::class,
                'choice_label' => function ($appartement) {
                    return $appartement->getNumappart()." ".$appartement->getTypeappart()." ".$appartement->getRue()." ".$appartement->getCodepostal();
            }))
        ;
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Locataire::class,
        ]);
    }
}
