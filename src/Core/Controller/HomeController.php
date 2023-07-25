<?php
namespace App\Core\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence;
use Doctrine\Bundle\DoctrineBundle\Command\DoctrineCommand;
use Doctrine\ORM\EntityManagerInterface;


use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\User\Entity\User;

class HomeController extends AbstractController {
    

    public function index():Response
    {
        return $this->render('Home/home.twig');
    }
    


    public function welcome():Response
    {
        return $this->render('Home/welcome.twig');
    }
}
