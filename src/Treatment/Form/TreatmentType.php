<?php

namespace App\Treatment\Form;

use App\TherapyRoom\Entity\TherapyRoom;
use App\Treatment\Entity\Treatment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\User\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TreatmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa zabiegu'
            ])
            ->add('leading_person', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'fullname',
                'label' => 'Prowadzący',
                'required' => true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->andWhere('u.roles LIKE :role')
                        ->setParameter('role', '%ROLE_INSTRUCTOR%');
                },
            ])
            ->add('price', NumberType::class, [
                'label' => 'Cena',
                'required' => true,
            ])
            ->add('duration', TextType::class, [
                'label' => 'Czas trwania zabiegu(w minutach)'
            ])
            ->add('therapy_room', EntityType::class, [
             'class' => TherapyRoom::class,
             'choice_label' => 'name',
             'label' => 'Sala zajęć',
             'required' => 'true',
            ])
            ->add('number_of_patients', NumberType::class, [
                'label' => 'Liczba miejsc'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz', 
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Treatment::class,
        ]);
    }
}
