<?php

namespace App\Core\Controller;

use App\Contact\Entity\Contact;
use App\Contact\Form\ContactType;
use App\SanatorySurvey\Repository\SanatorySurveyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function __construct(
        private SanatorySurveyRepository $sanatorySurveyRepository,
        private ManagerRegistry $doctrine,
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

    public function welcome(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash('success', 'Wiadomość została wysłana! Dziękujemy za zaufanie!');

            return $this->redirectToRoute('welcome');
        }

        return $this->render('Home/welcome.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function accessdenied(): Response
    {
        return $this->render('Core/access-denied.twig');
    }
}
