<?php

namespace App\Reservation\Form;

use App\PlannedStay\Entity\PlannedStay;
use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Reservation\Entity\Reservation;
use App\Room\Entity\Room;
use App\User\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'fullname',
                'label' => 'reservation.client.value',
                'attr' => [
                    'class' => 'form-control',
                ],
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->andWhere('u.roles LIKE :role')
                    ->setParameter('role', '%ROLE_CLIENT%');
                }
            ])
            ->add('pesel', TextType::class, [
                'label' => 'reservation.pesel.value',
                'attr' => [
                    'placeholder' => 'reservation.pesel.placeholder',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Assert\Length([
                        'min' => 11,
                        'max' => 11,
                        'exactMessage' => 'Numer PESEL musi zawierać dokładnie {{ limit }} znaków',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^\d{11}$/',
                        'message' => 'Numer PESEL może zawierać tylko cyfry',
                    ]),
                ],
            ])
            ->add('referralNumber', TextType::class, [
                'label' => 'reservation.refferalNumber.value',
                'attr' => [
                    'placeholder' => 'reservation.refferalNumber.placeholder',
                    'class' => 'form-control',
                ],
            ])
            ->add('numOfPeople', TextType::class, [
                'label' => 'reservation.numOfPeople.value',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('plannedStay', EntityType::class, [
                'class' => PlannedStay::class,
                'choice_label' => 'rehabilitation_stay.name',
                'label' => 'reservation.plannedStay.value',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('room', EntityType::class, [
                'class' => Room::class,
                'choice_label' => 'room_number',
                'label' => 'reservation.room.value',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'reservation.save.value',
                'attr' => [
                    'class' => 'btn btn-primary'
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }


}