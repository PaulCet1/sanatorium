<?php

namespace App\TherapyRoom\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TherapyRoomEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa',
            ])
            ->add('number', IntegerType::class, [
                'label' => 'Numer'
            ])
            ->add('session', ChoiceType::class, [
                'label' => 'Rodzaj sali',
                'choices' => [
                    'Grupowe' => 'group',
                    'Personalne' => 'personal',
                ],
            ])
            ->add('attendance_limit', TextType::class, [
                'label' => 'Limit ćwiczących'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz zmiany',
            ]);

        $therapyRoom = $options['data'];
        $builder->setData($therapyRoom);
    }

}