<?php

namespace App\User\Form;

use Symfony\Component\Form\AbstractType;
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
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz zmiany',
            ]);

        $user = $options['data'];
        $builder->setData($user);
    }

}