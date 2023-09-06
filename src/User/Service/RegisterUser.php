<?php
namespace App\User\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\User\Service\CreateUser;
use App\User\ValueObject\UserVO;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterUser {
    /** @var CreateUser **/
    private $createUser;
    
    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher){
        $this->createUser = new CreateUser($entityManager, $userPasswordHasher);
    }
    
    public function registerFromRequest(Request $request):void {
        $this->valid($request);
        $userVO = new UserVO();
        $userVO->username = $request->get('username');
        $userVO->password = $request->get('password');
        $userVO->email = $request->get('email');
        $userVO->fullname = $request->get('fullname');
        $this->createUser->create($userVO);
    }
    
    private function valid(Request $request):void {
        if($request->get('password') != $request->get('repeatPassword')) {
            throw new Exception('Pola hasła nie mogą się różnić!');
        }
    }
}
