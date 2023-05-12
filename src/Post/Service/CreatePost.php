<?php
namespace App\Post\Service;
use Doctrine\ORM\EntityManagerInterface;
use App\Post\Entity\Post;
use App\Post\Service\validPostData;


class CreatePost {
    /** @var EntityManagerInterface **/
    private $entityManager;
    
    /** @var ValidPostData **/
    private $validPostData;
    
    public function __construct(EntityManagerInterface $entityManager) {
        $this ->entityManager = $entityManager;
        $this->validPostData = new ValidPostData();
        
    }
    
     public function create(string $content): Post {
        $this->validPostData->valid($content);
        $post = new Post();
        $post->setContent($content);
        $this->entityManager->persist($post);
        $this->entityManager->flush();
        
        
         return $post;
    }
    
    
   
}
