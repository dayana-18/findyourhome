<?php

namespace App\Form;

use App\Entity\Demande;
use App\Entity\Arrondissement;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeDem')
            ->add('villeDem')
            ->add('dateLimite', DateType::class, [
                'placeholder' => [
                    'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année', 
                ]
                ])
            ->add('arrondisseDem', EntityType::class, array(
                'class'         => Arrondissement::class,
                'choice_label'  => 'arrondisseDem',
                'multiple'      => true
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
