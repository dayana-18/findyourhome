<?php

namespace App\Form;

use App\Entity\Arrondissement;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Appartement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\File;


class AppartementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rue')
            ->add('codePostal')
            ->add('ville')
            ->add('etage')
            ->add('typeappart')
            ->add('prixLoc')
            ->add('prixCharges')
            ->add('libelle', null, array('label' => 'Description (Les commodités de l`appartement)'))
            ->add('ascenseur')
            ->add('preavis')
            ->add('dateLibre', DateType::class, [
                'placeholder' => [
                    'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année', 
                ]])
            ->add('cotisation')
            ->add('arrondisseDem', EntityType::class, array(
                'class'         => Arrondissement::class,
                'choice_label'  => 'arrondisseDem'
            ))
            ->add('photo', FileType::class, [
                'label' => 'Photo (fichier PNG - JPEG - PJPEG)',
                'mapped' => false,
                'required' => false,
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                /*'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg,', 'image/pjpeg', 'image/png', 'image/jpg'
                        ],
                        'mimeTypesMessage' => 'Télécharger une image jpeg, png valide',
                    ])
                ],*/
            ])    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appartement::class,
        ]);
    }
}