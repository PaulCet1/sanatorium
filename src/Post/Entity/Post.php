<?php
namespace App\Post\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\GeneratedValue;
use App\Core\Entity\TraitSpace\IdTrait;
use App\Core\Entity\TraitSpace\CreatedTrait;
use DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Post\Repository\PostRepository")
 * @ORM\Table(name="post")
 * @ORM\HasLifecycleCallbacks
 */

class Post {
    
    use IdTrait;
    use CreatedTrait;
    
    /**
     * 
     * @ORM\Column(name="content", type="string", length=1000)
     */
    private $content = '';
    
    

    /**
     * 
     * @ORM\OneToMany(targetEntity="App\Post\Entity\PostLike", mappedBy="post")
     */
    private $postLike;
    
    
    
    public function setContent(string $content):void {
        $this->content = $content;
    }
    
    public function getContent():string {
        return $this->content;
    }
    
    public function getPostLike(){
        return $this->postLike;
    }
}
