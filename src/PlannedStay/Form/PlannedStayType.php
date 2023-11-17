<?php

namespace App\PlannedStay\Form;

use App\PlannedStay\Entity\PlannedStay;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType; // Używamy DateType dla daty
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\RehabilitationStay\Entity\RehabilitationStay;

class PlannedStayType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rehabilitation_stay', EntityType::class, [
                'class' => RehabilitationStay::class,
                'choice_label' => 'name',
                'label' => 'Wybierz rodzaj turnusu'
            ])
            ->add('start_date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Data rozpoczęcia',
            ])

            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PlannedStay::class,
        ]);
    }
}
