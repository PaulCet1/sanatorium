<?php

namespace App\SanatorySurvey\Form;

use App\Reservation\Entity\Reservation;
use App\SanatorySurvey\Entity\SanatorySurvey;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SanatorySurveyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reservation', EntityType::class, [
                'class' => Reservation::class,
                'choice_label' => function (Reservation $reservation) {
                    return sprintf(
                        '%s: %s - %s',
                        $reservation->getPlannedStay()->getRehabilitationStay()->getName(),
                        $reservation->getPlannedStay()->getStartDate()->format('d-m-Y'),
                        $reservation->getPlannedStay()->getEndDate()->format('d-m-Y'),
                    );
                },
                'disabled' => true,
                'label' => 'Pobyt',
            ])
            ->add('rehabilitationStayRating', ChoiceType::class, [
                'label' => 'Wybierz ocenę dla turnusu',
                'choices' => $this->generateRatings(),
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('treatmentRating', ChoiceType::class, [
                'label' => 'Wybierz ocenę dla zabiegów',
                'choices' => $this->generateRatings(),
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('staffRating', ChoiceType::class, [
                'label' => 'Wybierz ocenę dla personelu',
                'choices' => $this->generateRatings(),
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('text', TextareaType::class, [
                'label' => 'Twoja opinia',
                'attr' => ['rows' => 5],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Wyślij',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SanatorySurvey::class,
        ]);
    }

    private function generateRatings(): array
    {
        return [
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
        ];
    }
}
