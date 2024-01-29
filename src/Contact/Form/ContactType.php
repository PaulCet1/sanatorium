<?php

namespace App\Contact\Form;

use Symfony\Component\Form\AbstractType;
use App\Contact\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Imię i nazwisko',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('contact_email', TextType::class, [
                'label' => 'Adres email',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('topic', TextType::class, [
                'label' => 'Temat',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Wiadomość',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => '10',
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Wyślij wiadomość',
                'attr' => ['class' => 'btn btn-primary'],
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }

}