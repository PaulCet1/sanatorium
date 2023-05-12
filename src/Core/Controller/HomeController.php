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
    
    /**
    * @Route("/home",name="home")
    */
    public function index(){
        
        $price = 2.99;
        return $this->render('Home/home.twig', ['price' => $price]);
    }
    
    /**
    * @Route("/createUser",name="createUser")
    */
    public function createUser(UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entitymanagerinterface){
        
        $user = new User();
        $user->setEmail('pawel@o2.pl');
        $user->setUsername('admin');
        $hashedPassword = $userPasswordHasher->hashPassword($user, 'Test123');
        $user->setPassword($hashedPassword);
        $entitymanagerinterface->persist($user);
        $entitymanagerinterface->flush();
        die();
    }
    
     /**
    * @Route("/bezpieczna",name="bezpieczna")
    */
    public function secure(){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $price = 78.99;
        $user = $this->getUser();
//        echo $user->getEmail();
        return $this->render('Home/home.twig', [
            'price' => $price,
            'user' => $user,
                ]);
    }

    
     /**
    * @Route("/admin/users",name="admin_users")
    */
    public function adminUsers(){
        
        $price = 78.99;
        $user = $this->getUser();
//        echo $user->getEmail();
        return $this->render('Home/home.twig', [
            'price' => $price,
            'user' => $user,
                ]);
    }    


    /**
    * @Route("/",name="welcome")
    */
    public function welcome(){
        
        
        return $this->render('Home/welcome.twig');
    }
}
