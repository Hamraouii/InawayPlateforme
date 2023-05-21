<?php

namespace App\Form;

use App\Entity\EtudesSuperieures;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudesSuperieuresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('tel')
            ->add('site')
            ->add('discription')
            ->add('acces')
            ->add('image')
            ->add('idSecteur');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EtudesSuperieures::class,
        ]);
    }
}
