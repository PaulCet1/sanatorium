<?php

namespace App\User\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('fullname')
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Użytkownik' => 'ROLE_USER',
                    'Administrator' => 'ROLE_ADMIN',
                    'Instruktor' => 'ROLE_INSTRUCTOR',
                    'Klient' => 'ROLE_CLIENT',
                    'Planista zabiegów' => 'ROLE_TREATMENT_PLANNER',
                ],
                'expanded' => true,
                'multiple' => true,
                'label' => 'Roles',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz zmiany',
            ]);

        $user = $options['data'];
        $builder->setData($user);
    }
}
