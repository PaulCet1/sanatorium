<?php

namespace App\RehabilitationStay\Form;

use App\RehabilitationStay\Entity\RehabilitationStay;
use App\Treatment\Entity\Treatment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RehabilitationStayEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('start_date')
            ->add('end_date')
            ->add('treatments', EntityType::class, [
                'class' => Treatment::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => false,
            ]);

        $rehabilitationStay = $options['data'];
        $builder->setData($rehabilitationStay);


    }
}