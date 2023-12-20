<?php

namespace App\UserReservation\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class FirstStepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ->add('referral_number', TextType::class, [
                'label' => 'Numer ewidencyjny skierowania',
                'attr' => [
                    'placeholder' => '00/00/123456/A/P0',
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
