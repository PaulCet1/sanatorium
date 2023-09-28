<?php

namespace App\Room\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class RoomEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('room_number', IntegerType::class, [
                'label' => 'Numer pokoju',
                'attr' => ['placeholder' => 'Wprowadź numer pokoju'],
            ])
            ->add('places_num', IntegerType::class, [
                'label' => 'Ilość miejsc',
                'attr' => ['placeholder' => 'Wprowadź ilość miejsc'],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);

        $room = $options['data'];
        $builder->setData($room);
    }

}