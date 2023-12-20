<?php

namespace App\TherapyRoom\Form;

use App\TherapyRoom\Entity\TherapyRoom;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TherapyRoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa sali',
                'attr' => ['placeholder' => 'Nazwa'],
            ])
            ->add('number', IntegerType::class, [
                'label' => 'Numer sali',
            ])
            ->add('session', ChoiceType::class, [
                'label' => 'Rodzaj sali',
                'choices' => [
                  'Grupowe' => 'group',
                  'Personalne' => 'personal',
                ],
            ])
            ->add('attendance_limit', IntegerType::class, [
                'label' => 'Limit miejsc',
                'attr' => ['placeholder' => 'Limit miejsc ćwiczących'],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
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
