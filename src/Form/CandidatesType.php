<?php

namespace App\Form;

use App\Entity\Candidates;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender')
            ->add('firstname')
            ->add('lastname')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('hasPassport')
            ->add('passport')
            ->add('cv')
            ->add('picture')
            ->add('currentLocation')
            ->add('birthdate')
            ->add('birthPlace')
            ->add('candidateEmail')
            ->add('password')
            ->add('isAvailable')
            ->add('jobSector')
            ->add('experience')
            ->add('shortDescription')
            ->add('candidateNotes')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidates::class,
        ]);
    }
}
