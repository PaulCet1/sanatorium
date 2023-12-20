<?php

namespace App\Core\Controller;

use App\SanatorySurvey\Repository\SanatorySurveyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function __construct(
        private SanatorySurveyRepository $sanatorySurveyRepository,
    ) {
    }

    public function index(): Response
    {
        return $this->render('Home/home.twig');
    }

    public function systemWelcome(): Response
    {
        $surveys = $this->sanatorySurveyRepository->findAll();

        $rehabilitation_stay_rating = 0;
        $treatment_rating = 0;
        $staff_rating = 0;

        foreach ($surveys as $survey) {
            $rehabilitation_stay_rating += $survey->getRehabilitationStayRating();
            $treatment_rating += $survey->getTreatmentRating();
            $staff_rating += $survey->getStaffRating();
        }

        $rehabilitation_stay_rating /= count($surveys);
        $treatment_rating /= count($surveys);
        $staff_rating /= count($surveys);
        dump($rehabilitation_stay_rating);

        return $this->render('Home/systemWelcome.twig', [
            'rehabilitation_stay_rating' => $rehabilitation_stay_rating,
            'treatment_rating' => $treatment_rating,
            'staff_rating' => $staff_rating,
        ]);
    }

    public function welcome(): Response
    {
        return $this->render('Home/welcome.twig');
    }

    public function accessdenied(): Response
    {
        return $this->render('Core/access-denied.twig');
    }
}
