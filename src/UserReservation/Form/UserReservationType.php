<?php

namespace App\UserReservation\Form;

use App\PlannedStay\Entity\PlannedStay;
use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Reservation\Entity\Reservation;
use App\Room\Entity\Room;
use App\User\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Config\Security;

class UserReservationType extends AbstractType
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
            ->add('plannedStay', EntityType::class, [
                'class' => PlannedStay::class,
                'choice_label' => 'rehabilitation_stay.name',
                'label' => 'Turnus',
                'required' => true,
            ])
            ->add('room', EntityType::class, [
                'class' => Room::class,
                'choice_label' => 'room_number',
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
            'data_class' => Reservation::class,
        ]);
    }

}