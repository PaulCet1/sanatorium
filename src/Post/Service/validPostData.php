<?php
namespace App\Post\Service;

use Exception;


class validPostData {

    
    public function valid(string $content):void {
        if(empty($content)){
            throw new Exception("Wpisz treść posta");
        }
    }
   
}
