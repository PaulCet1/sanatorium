<?php

namespace App\TreatmentProfile\Form;

use App\TreatmentProfile\Entity\TreatmentProfile;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TreatmentProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa profilu leczenia',
                'attr' => ['placeholder' => 'Wprowadź nazwę'],
            ])
            ->add('code', IntegerType::class, [
                'label' => 'Ilość miejsc',
                'attr' => ['placeholder' => 'Wprowadź kod'],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TreatmentProfile::class,
        ]);
    }

}