<?php

namespace App\Room\Form;

use App\Room\Entity\Room;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoomType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('room_number', IntegerType::class, [
                'label' => 'room.number',
                'attr' => [
                    'placeholder' => 'room.number.placeholder',
                    'class' => 'form-control'
                ],
            ])
            ->add('places_num', IntegerType::class, [
                'label' => 'room.places',
                'attr' => [
                    'placeholder' => 'room.places.placeholder',
                    'class' => 'form-control'
                    ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'room.save',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }

}