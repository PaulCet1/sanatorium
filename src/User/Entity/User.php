<?php
namespace App\User\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\GeneratedValue;
use App\Core\Entity\TraitSpace\IdTrait;
use App\Core\Entity\TraitSpace\CreatedTrait;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * @ORM\Entity()
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks
 */

class User implements UserInterface, PasswordAuthenticatedUserInterface {
    use IdTrait;
    use CreatedTrait;
    
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;
            
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;
    
    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];
    
    /**
     * @var string The hashed password
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
    public function getEmail():string {
        return $this->email;
    }
    
    public function setUsername(string $username) :void {
        $this->username = $username;
    }
    
    public function getUsername(): string {
        return $this->username;
    }
    
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        
        return array_unique($roles);
    }
    
    public function setRoles(array $roles): void
    {
        $this->roles=$roles;
    }
    
    public function getPassword(): string {
        return (string)$this->password;
    }
    
    public function setPassword(string $password): void{
        $this->password = $password;
    }
    
    public function getSalt(){
        //put code
    }
    
    public function eraseCredentials() {
        //put code
    }

    public function getUserIdentifier(): string {
        return $this->username;
    }

}
