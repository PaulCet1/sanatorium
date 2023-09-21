<?php

namespace App\TherapyRoom\Form;

use App\TherapyRoom\Entity\TherapyRoom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TherapyRoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => ['placeholder' => 'Enter name'],
            ])
            ->add('session', TextType::class, [
                'label' => 'Session',
                'attr' => ['placeholder' => 'Enter session number'],
            ])
            ->add('attendance_limit', IntegerType::class, [
                'label' => 'Attendance limit',
                'attr' => ['placeholder' => 'Enter attendance limit'],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TherapyRoom::class,
        ]);
    }

}