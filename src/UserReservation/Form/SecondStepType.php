<?php

namespace App\UserReservation\Form;

use App\PlannedStay\Entity\PlannedStay;
use App\Room\Entity\Room;
use App\User\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SecondStepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'fullname',
                'label' => 'Klient',
                'required' => true,
                'disabled' => true,
            ])
            ->add('referral_number', TextType::class, [
                'label' => 'Numer ewidencyjny skierowania',
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('NFZPlace', TextType::class, [
                'label' => 'Placówka Narodowego Funduszu Zdrowia',
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('pesel', TextType::class, [
                'label' => 'Numer PESEL',
                'attr' => [
                    'readonly' => true,
                    ]
            ])
            ->add('plannedStay', EntityType::class, [
                'class' => PlannedStay::class,
                'choices' => $options['plannedStays'],
                'choice_label' => function (PlannedStay $plannedStay) {
                    return $plannedStay->getRehabilitationStay()->getName() .': ' . $plannedStay->getStartDate()->format('d-m-Y') . ' - ' . $plannedStay->getEndDate()->format('d-m-Y');
                },
                'label' => 'Dostępne turnusy',
            ])
            ->add('numOfPeople', TextType::class, [
                'label' => 'Liczba uczestników (w tym dzieci)',
            ])
            ->add('room', EntityType::class, [
                'class' => Room::class,
                'choice_label' => function(Room $room) {
                    return sprintf('Numer pokoju %s | Ilość miejsc: %s ', $room->getRoomNumber(), $room->getPlacesNum());
                },
                'label' => 'Pokój',
                'required' => true,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'plannedStays' => [],
        ]);
    }
}