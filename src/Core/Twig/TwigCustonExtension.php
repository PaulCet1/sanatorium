<?php
namespace App\Core\Twig;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use App\Post\Service\CreatePost;
use App\Post\Entity\Post;
use Symfony\Component\HttpFoundation\RequestStack;

class TwigCustonExtension extends AbstractExtension {
    
    
    /** @var ContainerInterface */
    private $container;
    
    /** @var Twig **/
    private $twig;
    
    
    public function __construct($container, $twig) {
        $this->container = $container;
        $this->twig = $twig;
    }
    /**
     * @return array
     */
    public function getFunctions() {
        return [
          new TwigFunction('convertPrice', [$this, 'convertPrice']),  
          new TwigFunction('createPost', [$this, 'createPost']),  
        ];
    }
    
    public function createPost():Post{
        $entityManager = $this->container->get('doctrine')->getManager();
        $createPost = new CreatePost($entityManager);
        $post = $createPost->create('Test Twig');
        return $post;
    }
    
    public function convertPrice(float $price):string {
        $parts = explode('.', $price);
        $html = '<b>'.$parts[0].'</b>,'.$parts[1];
        $html .= $this->getRoute();
        return $this->twig->render('Home/priceTwig.twig', ['html' => $html], true);
                
    }
    
    
    private function getRoute(){
        $requestStack = $this->container->get('request_stack');
        $masterRequest = $requestStack->getCurrentRequest();
        return $masterRequest->attributes->get('_route');
    }
                
}
