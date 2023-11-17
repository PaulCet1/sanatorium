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
                'label' => 'Klient',
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->andWhere('u.roles LIKE :role')
                    ->setParameter('role', '%ROLE_CLIENT%');
                }
            ])
            ->add('pesel', TextType::class, [
                'label' => 'Numer PESEL',
                'attr' => [
                    'placeholder' => '00000000000',
                ],
                'constraints' => [
                    new Assert\Length([
                        'min' => 11,
                        'max' => 11,
                        'exactMessage' => 'Numer PESEL musi zawierać dokładnie {{ limit }} znaków.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^\d{11}$/',
                        'message' => 'Numer PESEL może zawierać tylko cyfry.',
                    ]),
                ],
            ])
            ->add('referralNumber', TextType::class, [
                'label' => 'Numer ewidencyjny skierowania',
                'attr' => [
                    'placeholder' => '00/00/123456/A/P0',
                ],
            ])
            ->add('numOfPeople', TextType::class, [
                'label' => 'Liczba uczestników (w tym dzieci)',
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