<?php

namespace App\Form;

use App\Entity\Reservering;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReserveringType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('opmerking', CKEditorType::class)
            ->add('start')
            ->add('eind')
            ->add('betaald')
            ->add('klant')
            ->add('kamer')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservering::class,
        ]);
    }
}
