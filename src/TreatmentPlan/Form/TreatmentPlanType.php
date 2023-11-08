<?php

namespace App\TreatmentPlan\Form;

use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Treatment\Entity\Treatment;
use App\TreatmentPlan\Entity\TreatmentPlan;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Validator\Constraints\NoTimeConflict;

class TreatmentPlanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $treatments = $options['treatments'];
        $builder
            ->add('rehabilitationStay', EntityType::class, [
                'class' => RehabilitationStay::class,
                'choice_label' => 'name',
                'required' => true,
                'disabled' => true,
                'label' => 'Nazwa Turnusu',
            ])
            ->add('treatment', EntityType::class,[
                'class' => Treatment::class,
                'choice_label' => 'name',
                'choices' => $treatments,
                'label' => 'Wybierz zabieg',
            ])
            ->add('start_time', DateTimeType::class, [
                'label' => 'Termin rozpoczęcia',
            ])
            ->add('end_time', DateTimeType::class, [
                'label' => 'Termin zakończenia',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TreatmentPlan::class,
            'rehabilitationStay' => null,
            'treatments' => [],
            'constraints' => [
                new NoTimeConflict(),
            ]
        ]);
    }

}