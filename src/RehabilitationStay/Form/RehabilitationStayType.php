<?php

namespace App\RehabilitationStay\Form;

use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Treatment\Entity\Treatment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RehabilitationStayType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('duration')
            ->add('treatments', EntityType::class, [
                'class' => Treatment::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => false,
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RehabilitationStay::class,
        ]);
    }


}