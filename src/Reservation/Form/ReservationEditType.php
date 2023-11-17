<?php

namespace App\Reservation\Form;

use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Reservation\Entity\Reservation;
use App\Room\Entity\Room;
use App\User\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ReservationEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'fullname',
                'label' => 'Klient',
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->andWhere('u.roles LIKE :role')
                        ->setParameter('role', '%ROLE_CLIENT%');
                }
            ])
            ->add('rehabilitationstay', EntityType::class, [
                'class' => RehabilitationStay::class,
                'choice_label' => 'name',
                'label' => 'Turnus',
                'required' => true,
            ])
            ->add('room', EntityType::class, [
                'class' => Room::class,
                'choice_label' => 'room_number',
                'label' => 'Pokój',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
        $reservation = $options['data'];
        $builder->setData($reservation);
    }



}