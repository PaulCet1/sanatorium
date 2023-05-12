<?php
namespace App\Core\Entity\TraitSpace;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\GeneratedValue;

trait IdTrait {
    
     /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;
    
        
    public function getId():int {
            return $this->id;
    }
}
