<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class AppartementAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('numappart')
            ->add('rue')
            ->add('codePostal')
            ->add('ville')
            ->add('etage')
            ->add('typeappart')
            ->add('libelle')
            ->add('prixLoc')
            ->add('prixCharges')
            ->add('ascenseur')
            ->add('preavis')
            ->add('dateLibre')
            ->add('cotisation')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('numappart')
            ->add('rue')
            ->add('codePostal')
            ->add('ville')
            ->add('etage')
            ->add('typeappart')
            ->add('libelle')
            ->add('prixLoc')
            ->add('prixCharges')
            ->add('ascenseur')
            ->add('preavis')
            ->add('dateLibre')
            ->add('cotisation')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            #->add('numappart')
            ->add('rue')
            ->add('etage')
            ->add('codePostal')
            ->add('ville')
            ->add('typeappart')
            ->add('libelle')
            ->add('prixLoc')
            ->add('prixCharges')
            ->add('ascenseur')
            ->add('preavis')
            ->add('dateLibre')
            ->add('cotisation')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('numappart')
            ->add('rue')
            ->add('codePostal')
            ->add('ville')
            ->add('etage')
            ->add('typeappart')
            ->add('libelle')
            ->add('prixLoc')
            ->add('prixCharges')
            ->add('ascenseur')
            ->add('preavis')
            ->add('dateLibre')
            ->add('cotisation')
            ;
    }
}
