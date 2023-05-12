<?php
namespace App\Post\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Post\Entity\Post;
use App\Post\Entity\PostLike;
use App\Post\Service\CreatePost;

use DateTime;
use Exception;

class PostController extends AbstractController {
    
    /**
     * @Route("/post",name="post")
     */
    
    public function create(CreatePost $createPost, Request $request, EntityManagerInterface $entityManager){
        if($request->isMethod('POST')){
            try{
                $createPost->create($request->get('content'));
                $this->addFlash('success', "Post został dodany.");
            } catch (Exception $ex) {
                $this->addFlash('danger', $ex->getMessage());

            }
            
            
        }
        
        
        
        
        
        
        
        
        
        return $this->render('Post/posts.twig');
    }
    
}
