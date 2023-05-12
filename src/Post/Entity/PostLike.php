<?php
namespace App\Post\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Core\Entity\TraitSpace\IdTrait;
use App\Core\Entity\TraitSpace\CreatedTrait;
use App\Post\Entity\Post;

/**
 * @ORM\Entity()
 * @ORM\Table(name="post_like")
 * @ORM\HasLifecycleCallbacks
 */
class PostLike {
    use IdTrait;
    use CreatedTrait;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="postLike")
     * @ORM\JoinColumn(name="post", referencedColumnName="id")
     */
    
    private $post;
    
    public function setPost(Post $post){
        $this->post = $post;
    }
    
    public function getPost():Post {
        return $this->post;
    }
    
}
